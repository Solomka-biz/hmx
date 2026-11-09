<?php

/**
 *
 */
abstract class PageController extends CController
{
    /** @var  string */
    private $_headTitle;
    /** @var  string */
    private $_headDescription;
    /** @var  string */
    private $_headKeywords;

    protected $_mainPage = false;

    protected $_selectedMenuItem = null;

    public function init()
    {
        parent::init();
        $this->layout = '/layout/page';
    }


    /**
     * @param string $headTitle
     */
    public function setHeadTitle($headTitle)
    {
        $this->_headTitle = $headTitle;
    }

    /**
     * @return string
     */
    public function getHeadTitle()
    {
        return $this->_headTitle;
    }

    /**
     * @param string $headKeywords
     */
    public function setHeadKeywords($headKeywords)
    {
        $this->_headKeywords = $headKeywords;
    }

    /**
     * @return string
     */
    public function getHeadKeywords()
    {
        return $this->_headKeywords;
    }

    /**
     * @param string $headDescription
     */
    public function setHeadDescription($headDescription)
    {
        $this->_headDescription = $headDescription;
    }

    /**
     * @return string
     */
    public function getHeadDescription()
    {
        return $this->_headDescription;
    }

    /**
     * @return TbApi
     */
    public function getBootstrap()
    {
        return \Yii::app()->getComponent('bootstrap');
    }


    /**
     * @param string $subject
     * @param string $letter
     */
    protected function sendLetter($subject, $letter)
    {
        $mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

        $feedbackEmail = \Yii::getAppParam(WebApplication::PARAM_NAME_FEEDBACK_EMAIL);

        $message = Swift_Message::newInstance($subject, $letter, 'text/html', 'utf-8');
        $message->addTo($feedbackEmail, $feedbackEmail);
        $message->setFrom('no-reply@xn--80auehpddv.xn--p1ai');

        $mailer->send($message, $failedRecepients);
    }

    public function getYandexMetrikaCounter()
    {
        $counter = \Yii::app()->getParams()->itemAt(WebApplication::PARAM_NAME_USE_YANDEX_METRIKA);
        return $counter;
    }

    public function getGoogleAnalyticsCounter()
    {
        $counter = \Yii::app()->getParams()->itemAt(WebApplication::PARAM_NAME_USE_GOOGLE_ANALYTICS);
        return $counter;
    }

    public function getJivositeWidgetId()
    {
        $widgetId = \Yii::app()->getParams()->itemAt(WebApplication::PARAM_NAME_USE_JIVOSITE);
        return $widgetId;
    }

    /**
     * @return boolean
     */
    public function getIsMainPage()
    {
        return $this->_mainPage;
    }

    /**
     * @return string
     */
    public function getSelectedMenuItem()
    {
        return $this->_selectedMenuItem;
    }

    /**
     * @param string $selectedMenuItem
     */
    public function setSelectedMenuItem($selectedMenuItem)
    {
        $this->_selectedMenuItem = $selectedMenuItem;
    }


}