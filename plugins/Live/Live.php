<?php

/**
	TODO
	====
	- api propre
	- html
	- jquery spy
	- simple stats above in TEXT
	- Security review
	- blog post, push version
 */

class Piwik_Live extends Piwik_Plugin
{
	public function getInformation()
	{
		return array(
			'name' => 'Live Visitors',
			'description' => 'Live Visitors!',
			'author' => 'Piwik',
			'homepage' => 'http://piwik.org/',
			'version' => '0.1',
		);
	}
}