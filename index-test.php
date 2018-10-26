<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

//Yii::setPathOfAlias('vendor',dirname(__FILE__).'/vendor');
//Yii::import('vendor.*');


/**
 * Função para debug de variáveis
 *
 * @uses element Description
 * @param mixed $param
 * @param boolean $exit
 */
function dbg ($param, $exit = true) {
    if($param==NULL)
        var_dump($param);
    else{
        echo '<pre>';
        print_r($param);
        echo '</pre>';
    }
    if ($exit) {
        exit;
    }
}

require_once($yii);
Yii::createWebApplication($config)->run();
