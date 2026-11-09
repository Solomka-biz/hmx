<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

if (YII_DEBUG) {
    error_reporting(-1);
    ini_set('display_errors', true);
}

require_once(dirname(__FILE__) . '/../../common/customYii.php');

$config = require(HMX_APP_ROOT . '/frontend/config/web.php');
$app    = \Yii::createWebApplication($config);

$app->run();