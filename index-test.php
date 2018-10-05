<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

defined('DS') or define('DS', DIRECTORY_SEPARATOR);

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1/framework/yii.php';
$config = require __DIR__.DS.'protected'.DS.'config'.DS.'test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
require_once __DIR__.DS.'vendor'.DS.'autoload.php';
Yii::createWebApplication($config)->run();
