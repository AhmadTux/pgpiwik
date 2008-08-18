<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id: Controller.php 241 2008-01-26 01:30:37Z matt $
 * 
 * @package Piwik_CoreHome
 * 
 */
require_once "API/Request.php";
require_once "ViewDataTable.php";

/**
 * @package Piwik_Dashboard
 */
class Piwik_LanguagesManager_Controller extends Piwik_Controller
{
	/**
	 * anonymous = in the session
	 * authenticated user = in the DB
	 */
	public function saveLanguage()
	{
		$language = Piwik_Common::getRequestVar('language');
		$currentUser = Piwik::getCurrentUserLogin();

		if($currentUser == 'anonymous')
		{
			$_SESSION['language'] = $language;
		}
		else
		{
			$this->saveLanguageForUser($currentUser, $language);
		}
		Piwik_Url::redirectToReferer();
	}
	
	/**
	 * @param string
	 * @param string
	 */
	protected function saveLanguageForUser( $login, $language )
	{
		$paramsBind = array($login, $language, $language);
		Piwik_Query('INSERT INTO '.Piwik::prefixTable('user_language') .
					' (login, language)
						VALUES (?,?)
					ON DUPLICATE KEY UPDATE language=?',
					$paramsBind);
	}
}