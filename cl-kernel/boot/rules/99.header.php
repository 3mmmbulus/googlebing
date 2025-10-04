<?php defined('CLOUDSUO') or die('Cloudsuo CMS.');

header('HTTP/1.0 '.$url->httpCode().' '.$url->httpMessage());
header('X-Powered-By: Cloudsuo');
