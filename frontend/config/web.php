<?php
/**
 *
 */
$frontendConfigDir = dirname(__FILE__);

$root = HMX_APP_ROOT;
Yii::setPathOfAlias('root', $root);
Yii::setPathOfAlias('seoanalizator', $root . DIRECTORY_SEPARATOR . 'seoanalizator.ru');
Yii::setPathOfAlias('data', $root . DIRECTORY_SEPARATOR . 'data');
Yii::setPathOfAlias('common', $root . DIRECTORY_SEPARATOR . 'common');
Yii::setPathOfAlias('frontend', $root . DIRECTORY_SEPARATOR . 'frontend');
Yii::setPathOfAlias('www', $root . DIRECTORY_SEPARATOR . 'frontend/www');
/* */
Yii::setPathOfAlias("bootstrap", $root . DIRECTORY_SEPARATOR . 'vendor/crisu83/yiistrap');
Yii::setPathOfAlias("mongoyii", $root . DIRECTORY_SEPARATOR . 'vendor/sammaye/mongoyii');

$params = [
    /** @see  WebApplication::PARAM_NAME_FEEDBACK_EMAIL */
    'feedbackEmail'             => null,
    /** @see  WebApplication::PARAM_NOTIFY_ABOUT_CALCULATOR_INIT */
    'notifyAboutCalculatorInit' => false,
    /** @see  WebApplication::PARAM_NAME_USE_YANDEX_METRIKA // использовать ли скрипт yandexMetrika */
    'useYandexMetrika'          => false,
    /** @see  WebApplication::PARAM_NAME_USE_GOOGLE_ANALYTICS // использовать ли скрипт googleAnalytics */
    'useGoogleAnalytics'        => false,
];

$mainLocalFile = $frontendConfigDir . DIRECTORY_SEPARATOR . 'main-local.php';
/** @noinspection PhpIncludeInspection */
$mainLocalConfiguration = file_exists($mainLocalFile) ? require($mainLocalFile) : array();

$mainEnvFile = $frontendConfigDir . DIRECTORY_SEPARATOR . 'main-env.php';
/** @noinspection PhpIncludeInspection */
$mainEnvConfiguration = file_exists($mainEnvFile) ? require($mainEnvFile) : array();

$mainConfiguration = array(
    'id'         => "hmx",
    'basePath'   => \Yii::getPathOfAlias('frontend'),
    'params'     => $params,
    'preload'    => array('log'),
    'language'   => 'ru',
    'import'     => array(
        'common.components.*',
        'common.extensions.*',
        'common.models.*',
        /* --- */
        'application.components.*',
        'application.controllers.*',
        'application.forms.*',
        'application.models.*',
        /* --- */
        'bootstrap.helpers.TbHtml',
        'mongoyii.*',
        'mongoyii.validators.*',
        'mongoyii.behaviors.*',
    ),
    'components' => array(
        'errorHandler'       => array( // @see http://www.yiiframework.com/doc/api/1.1/CErrorHandler#errorAction-detail
            //'errorAction' => 'site/error'
        ),
        'urlManager'         => require('urlManager.php'),
        'clientScript'       => array(
            'class'    => 'CClientScript',
            'packages' => require('clientScript.php'),
        ),
        'yandexDirectClient' => array(
            'class' => 'YandexDirectClient'
        ),
        'bootstrap'          => array(
            'class' => 'bootstrap.components.TbApi',
        ),
        'cache'              => array(
            'class'    => 'CRedisCache',
            'hostname' => '127.0.0.1',
            'port'     => 6379,
            'database' => 0,
        ),
        'mongodb'            => array(
            'class'  => 'EMongoClient',
            'server' => 'mongodb://localhost:27017',
            'db'     => 'hmx_ru'
        ),
    ),
);

return CMap::mergeArray(
    $mainConfiguration,
    CMap::mergeArray($mainEnvConfiguration, $mainLocalConfiguration)
);