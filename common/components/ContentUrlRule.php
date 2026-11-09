<?php
/**
 *
 */

abstract class ContentUrlRule extends CBaseUrlRule
{
    private $reverseMap = null;

    abstract function getContentMap();

    abstract function getBasicRount();

    /**
     * Creates a URL based on this rule.
     *
     * @param CUrlManager $manager   the manager
     * @param string      $route     the route
     * @param array       $params    list of parameters (name=>value) associated with the route
     * @param string      $ampersand the token separating name-value pairs in the URL.
     *
     * @return mixed the constructed URL. False if this rule does not apply.
     */
    public function createUrl($manager, $route, $params, $ampersand)
    {

        if ($route != $this->getBasicRount()) {
            return false;
        }

        if (!isset($params['content'])) {
            return false;
        }


        $content    = $params['content'];
        $reverseMap = $this->getReverseMap();

        if (isset($reverseMap[$content])) {
            return $reverseMap[$content];
        }

        return false;
    }


    /**
     * Parses a URL based on this rule.
     *
     * @param CUrlManager  $manager     the URL manager
     * @param CHttpRequest $request     the request object
     * @param string       $pathInfo    path info part of the URL (URL suffix is already removed based on {@link CUrlManager::urlSuffix})
     * @param string       $rawPathInfo path info that contains the potential URL suffix
     *
     * @return mixed the route that consists of the controller ID and action ID. False if this rule does not apply.
     */
    public function parseUrl($manager, $request, $pathInfo, $rawPathInfo)
    {
        if (isset($this->getContentMap()[$pathInfo])) {
            $name  = 'content';
            $value = $this->getContentMap()[$pathInfo];
            if (is_string($value)) {
                $_REQUEST[$name] = $_GET[$name] = $value;
                return '/' . $this->getBasicRount();
            }
        }

        $pathInfo = $manager->removeUrlSuffix($pathInfo, '.html');
        if (isset($this->getContentMap()[$pathInfo])) {
            $name  = 'content';
            $value = $this->getContentMap()[$pathInfo];
            if ($value === true) {
                $value = $pathInfo;
            }

            $_REQUEST[$name] = $_GET[$name] = $value;
            return '/' . $this->getBasicRount();
        }

        return false;
    }


    protected function getReverseMap()
    {
        if (is_null($this->reverseMap)) {
            $this->reverseMap = $this->prepareContentMap($this->getContentMap());
        }

        return $this->reverseMap;
    }

    /**
     * @param $contentMap
     *
     * @return array
     */
    protected static function prepareContentMap($contentMap)
    {
        $prepareMap = [];
        foreach ($contentMap as $key => $value) {

            $preparedKey   = $value;
            $preparedValue = $key;

            if ($value === true) {
                $preparedKey   = $key;
                $preparedValue = $key . ".html";
            }

            $prepareMap[$preparedKey] = $preparedValue;
        }
        return $prepareMap;
    }


}