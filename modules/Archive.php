<?php
/**
 * Archiving process
 * 
 * 
 * Requirements
 * 
 * + needs powerful and easy date handling => Zend_Date
 * + Needs many date helper functions
 * 		from a day, gives the week + list of the days in the week
 * 		from a day, gives the month + list of the days in the month
 * 		from a day, gives the year + list of the days in the year + list of the months in the year
 * - Contact with DB abstracted from the archive process
 * - Handle multi periods: day, week, month, year
 * - Each period logic is separated into different classes 
 *   so that we can in the future easily add new weird periods
 * - support for partial archive (today's archive for example, but not limited to today)
 * 
 * 	Features:
 * - delete logs once used for days
 *   it means that we have to keep the useful information for months/week etc.
 *   check also that the logging process doesn't use the logs we are deleting
 * 
 * 
 * Architecture
 * - *ArchiveProcessing* entity : handle all the computation on an archive / create & delete archive
 * - *Archive* entity: 
 * 		contains the information on an archive, 
 * 		uses the ArchiveProcessing if necessary
 * 		small overhead so we can instanciate many objects of this class for example one for each day 
 * 			of the month
 * - *Website* entity: getId, getUrls, getFirstDay, etc.
 * + *Period* entity: composed of *Date* objects
 * + *Table* entity: serialize, unserialize, sort elements, limit number of elements
 * 		contains all the logic, data structure, etc.
 * 		receives data directly from the sql query via a known API
 * - The *ArchiveProcessing* saves in the DB *numbers* or *Table* objects
 *  
 */
 
require_once 'Period.php';
require_once 'ArchiveProcessing.php';

class Piwik_Archive
{
	const INDEX_NB_UNIQ_VISITORS = 1;
	const INDEX_NB_VISITS = 2;
	const INDEX_NB_ACTIONS = 3;
	const INDEX_MAX_ACTIONS = 4;
	const INDEX_SUM_VISIT_LENGTH = 5;
	const INDEX_BOUNCE_COUNT = 6;
	
	protected $period = null;
	protected $id = null;
	protected $isThereSomeVisits = false;
	protected $alreadyChecked = false;
	protected $archiveProcessing = null;
	
	protected $cacheEnabledForNumeric = true;
	
	public function __construct()
	{
	}
	
	// to be used only once
	public function setPeriod( Piwik_Period $period )
	{
		$this->period = $period;
	}
	
	function setSite( Piwik_Site $site )
	{
		$this->site = $site;
	}	
	
	public function prepareArchive()
	{
		if(!$this->alreadyChecked)
		{
			// we make sure the archive is available for the given date
			$periodLabel = $this->period->getLabel();
			$archiveProcessing = Piwik_ArchiveProcessing::factory($periodLabel);
			$archiveProcessing->setSite($this->site);
			$archiveProcessing->setPeriod($this->period);
			$IdArchive = $archiveProcessing->loadArchive();
			
			$this->archiveProcessing = $archiveProcessing;
			$isThereSomeVisits = Zend_Registry::get('db')->fetchOne(
					'SELECT value 
					FROM '.$archiveProcessing->getTableArchiveNumericName().
					' WHERE name = ? AND idarchive = ?', array('nb_visits',$IdArchive));
					
			if($isThereSomeVisits!==false)
			{
				$this->isThereSomeVisits = true;
			}
			$this->idArchive = $IdArchive;
			$this->alreadyChecked = true;
		}
	}
	
	public function get( $name, $typeValue = 'numeric' )
	{
		if($this->cacheEnabledForNumeric
			&& isset($this->numericCached[$name])
			)
		{
			return $this->numericCached[$name][$typeValue];
		}
		
		$this->prepareArchive();
				
		if($name == 'idarchive')
		{
			return $this->idArchive;
		}
		
//		Piwik::log("-- get '$name'");
		
		if(!$this->isThereSomeVisits)
		{
			return false;
		}

		// select the table to use depending on the type of the data requested		
		switch($typeValue)
		{
			case 'blob':
				$tableBlob = $this->archiveProcessing->getTableArchiveBlobName();
				// select data from the blob table
				$table = $tableBlob; 
			break;

			case 'numeric':
			default:
				$tableNumeric = $this->archiveProcessing->getTableArchiveNumericName();
				// select data from the numeric table (by default)
				$table = $tableNumeric;
			break;
		}

		// we select the requested value
		$db = Zend_Registry::get('db');
		$value = $db->fetchOne("SELECT value 
								FROM $table
								WHERE idarchive = ?
									AND name = ?",	
								array( $this->idArchive , $name) 
							);

		// no result, returns false
		if($value === false)
		{
			if($this->cacheEnabledForNumeric)
			{
				// we cache the results
				$this->numericCached[$name][$typeValue] = false;
			}	
			return $value;
		}
		
		// uncompress when selecting from the BLOB table
		if($typeValue == 'blob')
		{
			$value = gzuncompress($value);
		}
		
		if($this->cacheEnabledForNumeric)
		{
			// we cache the results
			$this->numericCached[$name][$typeValue] = $value;
		}
		return $value;
	}
	
	public function getDataTable( $name, $idSubTable = null )
	{
		if($idSubTable !== null)
		{
			$name .= "_$idSubTable";
		}
		
		$data = $this->get($name, 'blob');
		
		$table = new Piwik_DataTable;
		
		if($data !== false)
		{
			$table->loadFromSerialized($data);
		}
		
		if($data === false 
			&& $idSubTable !== null)
		{
			throw new Exception("You are requesting a precise subTable but there is not such data in the Archive.");
		}
	
		return $table;
	}
	
	
	public function getNumeric( $name )
	{
		return $this->get($name, 'numeric');
	}
	
	public function getBlob( $name )
	{
		return $this->get($name, 'blob');		
	}
	
	// fetches many fields at once for performance
	public function preFetchNumeric( $aName )
	{
		// TODO implement prefetch
		
		
	}
	
	public function freeBlob( $name )
	{
		
	}
	
	// fetches all blob fields name_* at once for performance
	public function preFetchBlob( $name )
	{
//		Piwik::log("-- prefetch blob ".$name."_*");
		
		if(!$this->isThereSomeVisits)
		{
			return false;
		}

		$tableBlob = $this->archiveProcessing->getTableArchiveBlobName();

		// we select the requested value
		$db = Zend_Registry::get('db');
		$query = $db->query("SELECT value, name
								FROM $tableBlob
								WHERE idarchive = ?
									AND name LIKE '$name%'",	
								array( $this->idArchive ) 
							);

		while($row = $query->fetch())
		{
			$value = $row['value'];
			$name = $row['name'];
			
			$value = gzuncompress($value);
			
			// we cache the results
			if($this->cacheEnabledForNumeric)
			{
				$this->numericCached[$name]['blob'] = $value;
			}
		}
	}
}




