<?php
if(!defined("PATH_TEST_TO_ROOT")) {
	define('PATH_TEST_TO_ROOT', getcwd().'/../..');
}
if(!defined('CONFIG_TEST_INCLUDED'))
{
	require_once PATH_TEST_TO_ROOT . "/tests/config_test.php";
}

//Zend_Loader::loadClass('Piwik_');

class Test_Piwik_ReleaseCheckList extends UnitTestCase
{
	function __construct( $title = '')
	{
		parent::__construct( $title );
	}
	
    public function test_checkThatConfigurationValuesAreProductionValues()
    {
    	$this->globalConfig = parse_ini_file(PATH_TEST_TO_ROOT . '/config/global.ini.php', true);
//    	var_dump($globalConfig);
    	$this->checkEqual(array('Debug' => 'always_archive_data'), '');
    	$this->checkEqual(array('Debug' => 'enable_sql_profiler'), '');
    	$this->checkEqual(array('General' => 'time_before_archive_considered_outdated'), '10');
    	$this->checkEqual(array('General' => 'enable_browser_archiving_triggering'), '1');
    	$this->checkEqual(array('General' => 'default_language'), 'en');
    	$this->checkEqual(array('Tracker' => 'record_statistics'), '1');
    	$this->checkEqual(array('Tracker' => 'visit_standard_length'), '1800');
    }
    private function checkEqual($key, $valueExpected)
    {
    	$section = key($key);
    	$optionName = current($key);
    	$value = $this->globalConfig[$section][$optionName];
    	$this->assertEqual($value, $valueExpected, "$section -> $optionName was '$value', expected '$valueExpected'");
    }
}
