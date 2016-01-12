<?php

/**
 * Copyright (C) 2016 Christian Barkowsky
 *
 * @author  Christian Barkowsky <hallo@christianbarkowsky.de>
 * @copyright Christian Barkowsky <http://christianbarkowsky.de>
 * @package Geolocation
 * @license LGPL
 */


namespace Barkowsky;


/**
 * Class FormGeolocation
 *
 * @property string $text
 *
 * @author Christian Barkowsky <https://github.com/christianbarkowsky>
 */
class FormGeolocation extends \Widget
{

	/**
	 * Submit user input
	 * @var boolean
	 */
	protected $blnSubmitInput = true;

	/**
	 * Add a for attribute
	 * @var boolean
	 */
	protected $blnForAttribute = true;

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget';


	/**
	 * Generate the widget and return it as string
	 *
	 * @return string
	 */
	public function generate()
	{
		return 'Test';
	}
}
