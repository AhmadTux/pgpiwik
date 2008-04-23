<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id: Controller.php 169 2008-01-14 05:41:15Z matt $
 * 
 * @package Piwik_Feedback
 */

/**
 *
 * @package Piwik_Feedback 
 */
class Piwik_Feedback_Controller extends Piwik_Controller
{	
	function index()
	{		
		$view = new Piwik_View('Feedback/index.tpl');
				
		echo $view->render();
	}

	/**
	 * send email to Piwik team and display nice thanks
	 */
	function sendFeedback()
	{
		// TODO: require user login or captcha if anonymous		
		
		$body = Piwik_Common::getRequestVar('body', '', 'string');
		$email = Piwik_Common::getRequestVar('email', '', 'string');
		$view = new Piwik_View('Feedback/sent.tpl');
		
		try 
		{
			$mail = new Piwik_Mail();
			$mail->setFrom($email);
			$mail->addTo('hello@piwik.org','Piwik Team');
			$mail->setSubject('[ Feedback form ]');
			$mail->setBodyText($body);
			@$mail->send();
		}
		catch(Exception $e)
		{
			$view->ErrorString = $e->getMessage();
			$view->message = $body;
		}
		
		echo $view->render();
	}
}