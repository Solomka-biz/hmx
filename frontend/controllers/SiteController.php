<?php

final class SiteController extends PageController
{


    /**
     * @see UrlManager::SITE_ACTION_INDEX
     */
    public function actionIndex()
    {
        $analyzerError   = \Yii::app()->getRequest()->getParam('analyzerError', false);
        $this->_mainPage = true;
        $this->render(
            '//site/index',
            [
                'analyzerError' => $analyzerError
            ]
        );
    }


    /**
     * @see UrlManager::SITE_ACTION_CONTACTS
     */
    public function actionContacts()
    {
        $this->render('//site/contacts');
    }

    /**
     * @see UrlManager::SITE_ACTION_ACTION
     */
    public function actionAction()
    {
        $this->render('//site/action');
    }

    /**
     * @see UrlManager::SITE_ACTION_REPORT
     */
    public function actionReport()
    {
        $this->render('//site/report');
    }

    /**
     * @see UrlManager::SITE_ACTION_PRICES
     */
    public function actionPrices()
    {
        $this->render('//site/prices');
    }

    /**
     * @see UrlManager::SITE_ACTION_DISCOUNT
     */
    public function actionDiscount()
    {
        $this->render('//site/discount');
    }


    /**
     * @see UrlManager::SITE_ACTION_MAP
     */
    public function actionMap()
    {
        $this->render('//site/map');
    }

    /**
     * @see UrlManager::SITE_ACTION_FOR_CLIENTS
     */
    public function actionForClients()
    {
        $this->render('//site/forClients');
    }

    /**
     * @see UrlManager::SITE_ACTION_GUARANTEE
     */
    public function actionGuarantee()
    {
        $this->render('//site/guarantee');
    }
    /**
     * @see UrlManager::SITE_ACTION_ABOUT
     */
    public function actionAbout()
    {
        $this->render('//site/about');
    }

    /**
     * @see UrlManager::SITE_ACTION_SITEFREE
     */
    public function actionSitefree()
    {
        $this->render('//site/sitefree');
    }

    /**
     * @see UrlManager::SITE_ACTION_ANALIZER
     */
    public function actionAnalizer()
    {
        $analyzerError   = \Yii::app()->getRequest()->getParam('analyzerError', false);
        $this->render(
            '//site/analizer',
            [
                'analyzerError' => $analyzerError
            ]
        );
    }
	
	/**
	* @see UrlManager::SITE_ACTION_INDEXTEST
    */
    public function actionIndextest()
    {
	$this->_mainPage = true;
    $this->render('//site/indextest');
    }
	
	/**	
	* @see UrlManager::SITE_ACTION_ZAKAZTEST
	*/
	public function actionZakaztest()
	{
	$this->render('//site/zakaztest');
	}


    /**
     * @param $content
     *
     * @see UrlManager::SITE_ACTION_CONTENT
     */
    public function actionContent($content)
    {
        if (in_array($content, SiteUrlRule::contentMap())) {
            $this->render('//site/content', array('content' => $content));
        } else {
            $this->redirect(\Yii::link()->site(), true, 307);
        }
    }
}