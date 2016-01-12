<?php

/**
 * Copyright (C) 2016 Christian Barkowsky
 *
 * @author  Christian Barkowsky <hallo@christianbarkowsky.de>
 * @copyright Christian Barkowsky <http://christianbarkowsky.de>
 * @package Geolocation
 * @license LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Barkowsky',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Widgets
	'Barkowsky\Geolocation' => 'system/modules/geolocation/widgets/Geolocation.php',
));
