<?php
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));

require_once(dirname(__FILE__) . '/../common/customYii.php');
$config = array();

$app = \Yii::createConsoleApplication($config);

$app->run();