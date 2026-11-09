<?php

/**
 *
 */
class WebApplication extends CWebApplication
{
    const PARAM_NAME_FEEDBACK_EMAIL          = 'feedbackEmail';
    const PARAM_NOTIFY_ABOUT_CALCULATOR_INIT = 'notifyAboutCalculatorInit';
    const PARAM_NAME_USE_YANDEX_METRIKA      = 'useYandexMetrika';
    const PARAM_NAME_USE_GOOGLE_ANALYTICS    = 'useGoogleAnalytics';
    const PARAM_NAME_USE_JIVOSITE            = 'useJivosite';

    /**
     * @return EMongoClient
     */
    public function getMongodb()
    {
        return $this->getComponent('mongodb');
    }

    /**
     * Логирует информацию о рассчете калькулятора
     *
     * @param array|WordstatItem[] $keywords
     * @param array|WordstatItem[] $hintwords
     */
    public function calculatorLog(
        $keywords,
        /** @noinspection PhpUnusedParameterInspection */
        $hintwords
    ) {
        CalculatorLogDocument::$db = $this->getMongodb();

        $keywordsData = array();
        foreach ($keywords as $item) {
            $keywordsData[] = array(
                'phrase' => $item->getPhrase(),
                'shows'  => $item->getShows(),
                'price'  => $item->getPrice(),
            );
        }

        {
            $log = new CalculatorLogDocument();

            $log->keywords = $keywordsData;

            $log->userHostAddress = $this->getRequest()->getUserHostAddress();
            $log->userAgent       = $this->getRequest()->getUserAgent();

            $log->datetime = new MongoDate(time());
        }

        $log->insert();
    }
}