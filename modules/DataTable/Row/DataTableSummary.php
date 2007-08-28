<?php
/**
 * This class creates a row from a given DataTable. 
 * The row contains 
 * - for each numeric column, the resulting "summary" column is the sum of all the subRows
 * - for every other column, it is ignored and will not be in the "summary row"
 * 
 * @see Piwik_DataTable_Row::sumRow() for more information on the algorith
 * 
 * @package Piwik_DataTable
 * @subpackage Piwik_DataTable_Row
 */
class Piwik_DataTable_Row_DataTableSummary extends Piwik_DataTable_Row
{
	function __construct($subTable)
	{
		parent::__construct();
		$this->addSubtable($subTable);
		foreach($subTable->getRows() as $row)
		{
			$this->sumRow($row);
		}
	}
}

