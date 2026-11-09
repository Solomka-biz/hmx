<?php
/**
 *
 */

final class CalculatorController extends PageController
{

    public function actionIndex()
    {
        $directAPI = $this->getYandexDirectClient()->getAPI();
        $pingAPI   = $directAPI->pingAPI();

        $form = new CalculatorForm();

        $viewData = array(
            'pingAPI' => $pingAPI,
            'form'    => $form,
        );
        $this->render('//calculator/index', $viewData);
    }

    const CALCULATOR_PROCESS_VIEW_TYPE_WORD  = 'word';
    const CALCULATOR_PROCESS_VIEW_TYPE_PRINT = 'print';

    public function actionProcess()
    {
        $request = \Yii::app()->getRequest();

        $form = new CalculatorForm($request->getParam('scenario'));

        $renderForm = function () use ($form) {
            $this->render(
                '//calculator/index',
                array('pingAPI' => 1, 'form' => $form)
            );
        };

        if (!$request->getIsPostRequest()) {
            $renderForm();
            return;
        }

        $form->setAttributes($request->getParam('request'), false);

        if (!$form->validate()) {
            $renderForm();
            return;
        }

        $viewType = $request->getParam('viewType', 'result');

        $report = $this->prepareReport($form->keywords);

        $pageData = $this->preparePageData($report, $form->hintwords, $form->ignoredHintwords);

        \Yii::app()->calculatorLog($pageData->keywords, $pageData->hintwords);

        // Отправляем на email информацию о том, что произошел рассчет.
        if ($form->getScenario() == CalculatorForm::SCENARIO_INITIAL) {
            $this->sendReportLetter($form, $pageData);
        }


        $template = '//calculator/result';
        switch ($viewType) {
            case self::CALCULATOR_PROCESS_VIEW_TYPE_PRINT:
                $this->layout = null;
                $template     = '//calculator/result.print';
                break;
            case self::CALCULATOR_PROCESS_VIEW_TYPE_WORD:
                $this->layout = null;
                $template     = '//calculator/result.word';
                break;
            default:
                break;
        }

        $this->render(
            $template,
            array('pageData' => $pageData, 'form' => $form)
        );
    }

    /**
     *
     */
    public function actionClear()
    {
        $client = $this->getYandexDirectClient();
        $list   = $client->getAPI()->getWordstatReportList();
        foreach ($list as $report) {
            $client->getAPI()->deleteWordstatReport($report->getId());
        }
    }

    /**
     *
     */
    public function actionOldVersion()
    {

        $this->layout = null;
        $this->render('//calculator/oldVersion');
    }


    /**
     * @return YandexDirectClient
     */
    protected function getYandexDirectClient()
    {
        return \Yii::app()->getComponent('yandexDirectClient');
    }


    /**
     * Подготавливает страницу с результатам в зависимости от данных отчёта
     *
     * @param WordstatReport $report
     * @param array          $hintwords
     * @param array          $ignoredHintwords
     *
     * @return CalculatorResultPageData
     */
    private function preparePageData(WordstatReport $report, $hintwords = array(), $ignoredHintwords = array())
    {
        $pageData = new CalculatorResultPageData();

        // вычисляем ключевые слова
        /** @var WordstatItem[] $keywords */
        $pageData->keywords = array();
        foreach ($report->getResults() as $keyword => $result) {
            $searchedWith = $result->getSearchedWith();
            if (array_key_exists($keyword, $searchedWith)) {
                $pageData->keywords[$keyword] = $searchedWith[$keyword];
            }
        }

        /** @var WordstatItem[] $keywords */
        $pageData->hintwords = array();
        foreach ($hintwords as $hintword) {
            foreach ($report->getResults() as $result) {
                $searchedWith = $result->getSearchedWith();
                $searchedAlso = $result->getSearchedAlso();

                if (array_key_exists($hintword, $searchedWith)) {
                    $pageData->hintwords[$hintword] = $searchedWith[$hintword];
                } elseif (array_key_exists($hintword, $searchedAlso)) {
                    $pageData->hintwords[$hintword] = $searchedAlso[$hintword];
                }
            }
        }

        // подготавливаем стоимость ключевых слов
        $totalCost       = 0;
        $processWordItem = function (WordstatItem $wordItem) use (&$totalCost) {
            $price = $this->calculatePrice($wordItem->getShows());
            $wordItem->setPrice($price);
            if ($price > 0) {
                $totalCost += $price;
            }
        };

        foreach ($pageData->keywords as $wordItem) {
            $processWordItem($wordItem);
        }

        foreach ($pageData->hintwords as $wordItem) {
            $processWordItem($wordItem);
        }


        $discount              = $this->detectDiscount($totalCost);
        $totalCostWithDiscount = round($totalCost * (1 - $discount));

        $pageData->totalCost             = $totalCost;
        $pageData->totalCostWithDiscount = $totalCostWithDiscount;
        $pageData->discount              = $discount;


        // подготавливаем подсказки
        /** @var WordstatItem[] $hints */
        $hints = array();

        $sliceNum = ceil(10 / count($report->getResults()));
        foreach ($report->getResults() as $keyword => $result) {
            $keywordHints = array();
            foreach ($result->getSearchedWith() as $hintword => $hintItem) {

                // пропускаем ключевое словосочетание
                if ($hintword == $keyword) {
                    continue;
                }
                // пропускаем словосочетание из списка выбранных подсказок
                if (in_array($hintItem->getPhrase(), $hintwords)) {
                    continue;
                }
                // пропускаем словосочетание с "плюсиком"
                if (strstr($hintItem->getPhrase(), "+") !== false) {
                    continue;
                }
                // пропускаем словосочетание из списка игнорированных
                if (in_array($hintItem->getPhrase(), $ignoredHintwords)) {
                    continue;
                }


                $keywordHints[] = $hintItem;
            }
            /** @noinspection PhpUnusedLocalVariableInspection */
            foreach ($result->getSearchedAlso() as $hintword => $hintItem) {
                if (in_array($hintItem->getPhrase(), $hintwords)) {
                    continue;
                }
                $keywordHints[] = $hintItem;
            }

            $keywordHints = array_slice($keywordHints, 0, $sliceNum);
            $hints        = CMap::mergeArray($hints, $keywordHints);
        }

        // подготавливаем стоимость подсказок
        $pageData->hints = $hints;
        foreach ($pageData->hints as $wordItem) {
            $price = $this->calculatePrice($wordItem->getShows());
            $wordItem->setPrice($price);
        }

        return $pageData;
    }

    /**
     * Считаем стоимость ключевого слова в зависимости от количества просмотров.
     *
     * @param $shows
     *
     * @return int
     */
    private function calculatePrice($shows)
    {
        $prices = CalculatorResultPageData::$prices;

        $totalPrice = 0;
        foreach ($prices as $showsNum => $price) {
            if ($shows >= $showsNum) {
                $totalPrice = $price;
            } else {
                break;
            }
        }

        return $totalPrice;
    }

    /**
     * Считаем скидку в зависимости от суммы.
     *
     * @param $cost
     *
     * @return int
     */
    private function detectDiscount($cost)
    {
        $discounts = CalculatorResultPageData::$discounts;
        asort($discounts);

        $totalDiscount = 0;
        foreach ($discounts as $totalCost => $discount) {
            if ($cost >= $totalCost) {
                $totalDiscount = $discount;
            } else {
                break;
            }
        }
        return $totalDiscount;
    }

    const ONE_REPORT_KEYWORDS_LIMIT  = 10;
    const ALL_REPORTS_KEYWORDS_LIMIT = 100;

    /**
     * Подготавливает отчёт в зависимости от переданных ключевых слов.
     *
     * @param string[] $keywords
     *
     * @return WordstatReport
     * @throws CException
     */
    private function prepareReport($keywords)
    {
        if (count($keywords) > self::ALL_REPORTS_KEYWORDS_LIMIT) {
            throw new CHttpException(500, "Слишком много слов для рассчёта");
        }

        $keywordsKey = serialize($keywords);
        if ($report = \Yii::app()->getCache()->get($keywordsKey)) {
            return $report;
        }

        if (count($keywords) <= self::ONE_REPORT_KEYWORDS_LIMIT) {
            $resultReport = $this->getOneReport($keywords);

        } else {
            $resultReport = new WordstatReport(null, WordstatReport::STATUS_DONE);
            $results      = [];

            $keywordChunks = array_chunk($keywords, self::ONE_REPORT_KEYWORDS_LIMIT);

            foreach ($keywordChunks as $chunk) {
                $report = $this->getOneReport($chunk);

                $results += $report->getResults();
            }

            $resultReport->setResults($results);
        }

        \Yii::app()->getCache()->set($keywordsKey, $resultReport, 3600);

        return $resultReport;
    }


    /**
     * Отправляет письмо о расчёте.
     *
     * @param CalculatorForm           $form
     * @param CalculatorResultPageData $pageData
     */
    private function sendReportLetter(CalculatorForm $form, CalculatorResultPageData $pageData)
    {
        // Проверяем, не запрещено ли в настройках отправлять отчет о расчете.
        if (!\Yii::getAppParam(WebApplication::PARAM_NOTIFY_ABOUT_CALCULATOR_INIT)) {
            \Yii::log("Calculate report not need");
            return;
        }

        $subject = "Рассчёт с сайта hmx.ru";
        // тут нужно отправить письмо
        $letter = $this->renderPartial(
            "//letters/calculate",
            array(
                'form'     => $form,
                'pageData' => $pageData,
                'remoteIP' => \Yii::app()->getRequest()->getUserHostAddress()
            ),
            true
        );

        $this->sendLetter($subject, $letter);
    }

    /**
     * @param $keywords
     *
     * @return WordstatReport
     * @throws CException
     */
    private function getOneReport($keywords)
    {
        $directAPI = $this->getYandexDirectClient()->getAPI();
        $reportId  = $directAPI->createNewWordstatReport($keywords);

        $reportReady = false;
        $counter     = 0;
        while ((!$reportReady && ($counter < 10))) {
            sleep(1);
            $counter++;

            $list   = $directAPI->getWordstatReportList();
            $report = $list[$reportId];
            if ($report->isDone()) {
                $reportReady = true;
            }
        }
        if (!$reportReady) {
            throw new CHttpException(500, "Отчёт невозможно подготовить! Попробуйте ещё раз.");
        }

        $report = $directAPI->getWordstatReport($reportId);
        $directAPI->deleteWordstatReport($reportId);
        return $report;
    }
}