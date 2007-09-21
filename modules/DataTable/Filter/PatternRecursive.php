<?php
/**
 * 
 * @package Piwik_DataTable
 * @subpackage Piwik_DataTable_Filter 
 */
class Piwik_DataTable_Filter_PatternRecursive extends Piwik_DataTable_Filter
{
	private $columnToFilter;
	private $patternToSearch;
	
	public function __construct( $table, $columnToFilter, $patternToSearch )
	{
		parent::__construct($table);
		$this->patternToSearch = $patternToSearch;
		$this->columnToFilter = $columnToFilter;
		$this->filter();
//		echo $this->table; exit;
	}
	
	protected function filter( $table = null)
	{
		if(is_null($table))
		{
			$table = $this->table;
		}
		
		foreach($table->getRows() as $key => $row)
		{
			// A row is deleted if
			// 1 - its label doesnt contain the pattern 
			// AND 2 - the label is not found in the children
			$patternNotFoundInChildren = false;
			
			try{
				$idSubTable = $row->getIdSubDataTable();
				$subTable = Piwik_DataTable_Manager::getInstance()->getTable($idSubTable);
				
				// we delete the row if we couldn't find the pattern in any row in the 
				// children hierarchy
				if( $this->filter($subTable) == 0 )
				{
					$patternNotFoundInChildren = true;
				}
			} catch(Exception $e) {
				// there is no subtable loaded for example
				$patternNotFoundInChildren = true;
			}

			if( $patternNotFoundInChildren
				&& !eregi($this->patternToSearch, $row->getColumn($this->columnToFilter)))
			{
				$table->deleteRow($key);
			}
		}
		
		return $table->getRowsCount();
	}
}
