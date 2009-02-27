<?php
/**
 * @package Piwik_LanguagesManager
 */
class Piwik_LanguagesManager_API 
{
	static private $instance = null;
	static public function getInstance()
	{
		if (self::$instance == null)
		{            
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}
	static protected $availableLanguageNames = null;
	static protected $languageNames = null;
	
	static public function isLanguageAvailable($languageCode)
	{
		return $languageCode !== false
			&& in_array($languageCode, self::getAvailableLanguages());
	}
	
	static public function getAvailableLanguages()
	{
		if(!is_null(self::$languageNames))
		{
			return self::$languageNames;
		}
		$path = PIWIK_INCLUDE_PATH . "/lang/";
		$languages = glob($path . "*.php");
		$pathLength = strlen($path);
		$languageNames = array();
		foreach($languages as $language) 
		{
			$languageNames[] = substr($language, $pathLength, -strlen('.php'));
		}
		self::$languageNames = $languageNames;
		return $languageNames;
	}
	
	static public function getAvailableLanguageNames()
	{
		if(!is_null(self::$availableLanguageNames))
		{
			return self::$availableLanguageNames;
		}
		
		$filenames = self::getAvailableLanguages();
		foreach($filenames as $filename) 
		{
			require "lang/$filename.php";
			$languagesInfo[] = array( 'code' => $filename, 'name' => $translations['General_OriginalLanguageName']);
		}
		self::$availableLanguageNames = $languagesInfo;
		return self::$availableLanguageNames;
	}
	
	/**
	 * @param string $login
	 * @param string|false $layout
	 */
	static public function getLanguageForUser( $login )
	{
		Piwik::checkUserIsSuperUserOrTheUser($login);
		return Piwik_FetchOne('SELECT language FROM '.Piwik::prefixTable('user_language') .
					' WHERE login = ? ', array($login ));
	}
	
	static public function setLanguageForUser($login, $language)
	{
		Piwik::checkUserIsSuperUserOrTheUser($login);
		$paramsBind = array($login, $language, $language);
		Piwik_Query('INSERT INTO '.Piwik::prefixTable('user_language') .
					' (login, language)
						VALUES (?,?)
					ON DUPLICATE KEY UPDATE language=?',
					$paramsBind);
// 			$queryProfiling = "UPDATE ".Piwik_Common::prefixTable('log_profiling')."
// 					SET count=count+$count, sum_time_ms=sum_time_ms+$time
// 					WHERE query=?";
// 			if (!$this->query($queryProfiling,array($query))) {
// 				$queryProfiling = "INSERT INTO ".Piwik_Common::prefixTable('log_profiling')."
// 							(query,count,sum_time_ms) VALUES (?,$count,$time)";
// 				$this->query($queryProfiling,array($query));
// 			}
	}
}
