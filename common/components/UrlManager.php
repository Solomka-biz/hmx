<?php

/**
 *
 */
class UrlManager extends CUrlManager
{

    const SITE_ACTION_INDEX       = 'index';
    const SITE_ACTION_CONTACTS    = 'contacts';
    const SITE_ACTION_MAP         = 'map';
    const SITE_ACTION_ACTION      = 'action';
    const SITE_ACTION_REPORT      = 'report';
    const SITE_ACTION_PRICES      = 'prices';
    const SITE_ACTION_DISCOUNT    = 'discount';
    const SITE_ACTION_FOR_CLIENTS = 'forClients';
    const SITE_ACTION_GUARANTEE   = 'guarantee';
    const SITE_ACTION_ABOUT       = 'about';
    const SITE_ACTION_ANALIZER    = 'analizer';
	const SITE_ACTION_SITEFREE    = 'sitefree';
	const SITE_ACTION_ORDER    = 'zakaz';


    public function site($action = null, $params = [])
    {
        if (!$action) {
            $action = self::SITE_ACTION_INDEX;
        }

        $path = '/site/' . $action;

        return $this->createUrl($path, $params);
    }

    const SITE_ACTION_CONTENT = 'content';
    const SITE_CONTENT_       = '';

    public function siteContent($content)
    {
        $params = ['content' => $content];
        return $this->createUrl('/site/content', $params);
    }


    const WIKI_CONTENT_ = '';

    public function wiki($content = null)
    {

        $params = [];
        if ($content) {
            $params['content'] = $content;
        }

        return $this->createUrl('/wiki/index', $params);
    }
	
	    
	const TAGS_CONTENT_ = '';

    public function tags($content = null)
    {

        $params = [];
        if ($content) {
            $params['content'] = $content;
        }

        return $this->createUrl('/tags/index', $params);
    }


    const ANSWERS_CONTENT_ = '';

    public function answers($content = null)
    {
        $params = [];
        if ($content) {
            $params['content'] = $content;
        }

        return $this->createUrl('/answers/index', $params);
    }

    public function portfolio($year = null)
    {
        $params = [];
        if ($year) {
            $params['year'] = $year;
        }

        return $this->createUrl('/portfolio/index', $params);

    }

    public function order()
    {
        return $this->createUrl('/order/index');
    }

    const CALCULATOR_ACTION_INDEX   = 'index';
    const CALCULATOR_ACTION_PROCESS = 'process';
    const CALCULATOR_ACTION_RESULT  = 'result';

    public function calculator($action = null)
    {
        if (!$action) {
            $action = self::CALCULATOR_ACTION_INDEX;
        }

        $path = '/calculator/' . $action;

        return $this->createUrl($path);
    }

    const ANALYZER_ACTION_RESULT  = 'result';

    public function analyzer($action = null)
    {
        if (!$action) {
            $action = self::CALCULATOR_ACTION_INDEX;
        }

        $path = '/analyzer/' . $action;

        return $this->createUrl($path);
    }




    const ADMIN_ACTION_INDEX = 'index';

    public function admin($action = null)
    {
        if (!$action) {
            $action = self::ADMIN_ACTION_INDEX;
        }

        $path = '/admin/' . $action;

        return $this->createUrl($path);
    }
}