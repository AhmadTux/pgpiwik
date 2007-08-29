<?php
/**
 * Delete all rows that have a $columnToFilter value less than the $minimumValue 
 * For example we delete from the countries report table all countries that have less than 3 visits.
 * It is very useful to exclude noise from the reports.
 * You can obviously apply this filter on a percentaged column, eg. remove all countries with the column 'percent_visits' less than 0.05
 * 
 * @package Piwik_DataTable
 * @subpackage Piwik_DataTable_Filter 
 */
class Piwik_DataTable_Filter_ExcludeLowPopulation extends Piwik_DataTable_Filter
{
	static public $minimumValue;
	public function __construct( $table, $columnToFilter, $minimumValue )
	{
		$this->columnToFilter = $columnToFilter;
		self::$minimumValue = $minimumValue;
		parent::__construct($table);
		$this->filter();
	}
	
	function filter()
	{
		$function = array("Piwik_DataTable_Filter_ExcludeLowPopulation","excludeLowPopulation");		

		$filter = new Piwik_DataTable_Filter_ColumnCallback(
												$this->table, 
												$this->columnToFilter, 
												$function
											);
		
	}
	
	static public function excludeLowPopulation($value)
	{
		return $value >= self::$minimumValue;
	}
}
