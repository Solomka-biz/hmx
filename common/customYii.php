<?php
defined('HMX_APP_ENV') or define('HMX_APP_ENV', (getenv('HMX_APP_ENV')
    ? getenv('HMX_APP_ENV')
    : 'production')
);
defined('HMX_APP_ROOT') or define('HMX_APP_ROOT', realpath(dirname(__FILE__) . '/../'));
require_once(dirname(__FILE__) . '/../vendor/autoload.php');
require_once(dirname(__FILE__) . '/../vendor/yiisoft/yii/framework/YiiBase.php');
require_once(dirname(__FILE__) . '/components/WebApplication.php');
/**
 * Class Yii
 */
class Yii extends YiiBase
{
    public static function getEnv()
    {
        return HMX_APP_ENV;
    }

    /**
     * @return UrlManager
     */
    public static function link()
    {
        return self::app()->getUrlManager();
    }

    /**
     * @return CClientScript
     */
    public static function clientScript()
    {
        return self::app()->getComponent('clientScript');
    }

    /**
     * @return WebApplication
     */
    public static function app()
    {
        return parent::app();
    }

    /**
     * @param null|array $config
     *
     * @return WebApplication
     */
    public static function createWebApplication($config = null)
    {
        return self::createApplication('WebApplication', $config);
    }

    /**
     *
     * @param string $name
     * @param mixed  $defaultValue
     *
     * @return mixed
     */
    public static function getAppParam($name, $defaultValue = null)
    {
        return self::app()->getParams()->hasProperty($name)
            ? self::app()->getParams()->itemAt($name)
            : $defaultValue;
    }


    /**
     * @param string $msg
     * @param string $level
     * @param string $category
     */
    public static function log($msg, $level = CLogger::LEVEL_INFO, $category = 'application')
    {
        // явная инициализация логгера, т.к. ниже баг.
        self::getLogger();
        if (!is_scalar($msg)) {
            $msg = CVarDumper::dumpAsString($msg);
        }
        parent::log($msg, $level, $category);
    }

}