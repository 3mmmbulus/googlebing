<?php

/*
 * Cloudsuo
 * https://www.cloudsuo.com
 * Author Diego Najar
 * Cloudsuo is opensource software licensed under the MIT license.
*/

// Check if Cloudsuo is installed
if (!file_exists('cl-content/databases/site.php')) {
	$base = dirname($_SERVER['SCRIPT_NAME']);
	$base = rtrim($base, '/');
	$base = rtrim($base, '\\'); // Workaround for Windows Servers
	header('Location:'.$base.'/install.php');
	exit('<a href="./install.php">Install Cloudsuo first.</a>');
}

// Load time init
$loadTime = microtime(true);

// Security constant
define('CLOUDSUO', true);

// Directory separator
define('DS', DIRECTORY_SEPARATOR);

// PHP paths for init
define('PATH_ROOT', __DIR__.DS);
define('PATH_BOOT', PATH_ROOT.'cl-kernel'.DS.'boot'.DS);

// Init
require(PATH_BOOT.'init.php');

// Admin area
if ($url->whereAmI()==='admin') {
	require(PATH_BOOT.'admin.php');
}
// Site
else {
	require(PATH_BOOT.'site.php');
}
