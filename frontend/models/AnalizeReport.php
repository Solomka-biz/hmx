<?php

/**
 *
 */
class AnalizeReport extends CFormModel
{
    private $_resultReport;
    private $_url;


    public $siteTitle;


    public $yandexTIC = 0;
    public $yandexTICLink = null;

    public $yandexPages = 0;
    public $yandexPagesLink = null;

    public $googlePageRank = 0;
    public $googlePages = 0;
    public $googlePagesLink = null;

    public $titleLength = 0;

    public $keyPhrasesInTitleCount = 0;

    public $keyPhrasesInDescriptionCount = 0;
    public $keyPhrasesInDescriptionCountAll = false;
    public $keyPhrasesInKeywordsCount = 0;
    public $keyPhrasesInKeywordsCountAll = false;

    public $keyPhrasesInTextCount = 0;
    public $keyPhrasesInTextCountAll = false;

    public $keyPhrasesInImgAltCount = 0;
    public $keyPhrasesInImgAltCountAll = false;
    public $keyPhrasesInBoldCount = 0;
    public $keyPhrasesInBoldCountAll = false;

    public $keyPhrasesInH1Count = 0;
    public $keyPhrasesInH1CountAll = false;
    public $keyPhrasesInOtherHCount = 0;
    public $keyPhrasesInOtherHCountAll = false;

    public $internalLinksCount = 0;
    public $externalLinksCount = 0;
    public $noindexRating = 0;

    public $siteLinksYahoo = 0;
    public $siteLinksYahooLink = null;
    public $siteLinksLinkpad = 0;
    public $siteLinksLinkpadLink = null;


    function __construct($url, $resultReport)
    {
        $this->_url          = $url;
        $this->_resultReport = $resultReport;

        parent::__construct();
    }

    public function getSiteName()
    {
        return $this->_url;
    }

    const ICON_GOOD = 'good';
    const ICON_BAD  = 'bad';

    public function getYandexTICResult()
    {
        $marks = [
            0    => [self::ICON_BAD, 'Отсутствует', 5],
            10   => [self::ICON_BAD, 'Низкий уровень', 20],
            50   => [self::ICON_GOOD, 'Достаточный уровень', 40],
            250  => [self::ICON_GOOD, 'Хороший уровень', 70],
            2000 => [self::ICON_GOOD, 'Отличный уровень', 100],
        ];

        return $this->extractMarkResult($this->yandexTIC, $marks);
    }

    public function getYandexPagesResult()
    {
        $marks = [
            0   => [self::ICON_BAD, 'Сайт не проиндексирован', 5],
            1   => [self::ICON_BAD, 'Очень мало', 20],
            10  => [self::ICON_GOOD, 'Достаточно', 40],
            50  => [self::ICON_GOOD, 'Хороший уровень', 70],
            500 => [self::ICON_GOOD, 'Отличный уровень', 100],
        ];

        return $this->extractMarkResult($this->yandexPages, $marks);
    }

    public function getGooglePageRankResult()
    {
        $marks = [
            0 => [self::ICON_BAD, 'Отсутствует', 5],
            1 => [self::ICON_BAD, 'Низкий уровень', 20],
            2 => [self::ICON_GOOD, 'Достаточный уровень', 40],
            3 => [self::ICON_GOOD, 'Хороший уровень', 70],
            5 => [self::ICON_GOOD, 'Отличный уровень', 100],
        ];

        return $this->extractMarkResult($this->googlePageRank, $marks);
    }

    public function getGooglePagesResult()
    {
        $marks = [
            0   => [self::ICON_BAD, 'Сайт не проиндексирован', 5],
            1   => [self::ICON_BAD, 'Очень мало', 20],
            10  => [self::ICON_GOOD, 'Достаточно', 40],
            50  => [self::ICON_GOOD, 'Хороший уровень', 70],
            500 => [self::ICON_GOOD, 'Отличный уровень', 100],
        ];

        return $this->extractMarkResult($this->googlePages, $marks);
    }

    public function getSearchEnginesRating()
    {
        $results   = [];
        $results[] = $this->getYandexTICResult();
        $results[] = $this->getYandexPagesResult();
        $results[] = $this->getGooglePagesResult();


        return $this->extractRatingResult($results);
    }


    public function getTitleLengthResult()
    {
        $marks = [
            0  => [self::ICON_BAD, 'Слишком мало', 5],
            30 => [self::ICON_GOOD, 'Достаточно', 40],
            50 => [self::ICON_GOOD, 'Правильное количество', 100],
            80 => [self::ICON_GOOD, 'Чуть больше, чем нужно', 60],
			100 => [self::ICON_BAD, 'Слишком много', 20],
        ];

        return $this->extractMarkResult($this->titleLength, $marks);
    }

    public function getKeyPhrasesInTitleCountResult()
    {
        $marks = [
            0  => [self::ICON_BAD, 'Слишком мало', 5],
            4  => [self::ICON_GOOD, 'Достаточно', 100],
            7  => [self::ICON_BAD, 'Чересчур много', 70],
            11 => [self::ICON_BAD, 'Слишком много', 30],
        ];

        return $this->extractMarkResult($this->keyPhrasesInTitleCount, $marks);
    }


    public function getKeywordsInDescriptionCountResult()
    {
        $countValue    = $this->keyPhrasesInDescriptionCount;
        $countAllValue = $this->keyPhrasesInDescriptionCountAll;

        return $this->extractKeywordMarkResult($countValue, $countAllValue);
    }

    public function getKeywordsInKeywordsCountResult()
    {
        $countValue    = $this->keyPhrasesInKeywordsCount;
        $countAllValue = $this->keyPhrasesInKeywordsCountAll;

        return $this->extractKeywordMarkResult($countValue, $countAllValue);
    }

    public function getKeywordsInTextCountResult()
    {
        $countValue    = $this->keyPhrasesInTextCount;
        $countAllValue = $this->keyPhrasesInTextCountAll;

        return $this->extractKeywordMarkResult($countValue, $countAllValue);
    }

    public function getKeywordsInImgCountResult()
    {
        $countValue    = $this->keyPhrasesInImgAltCount;
        $countAllValue = $this->keyPhrasesInImgAltCountAll;

        return $this->extractKeywordMarkResult($countValue, $countAllValue);
    }


    public function getKeywordsInBoldCountResult()
    {
        $countValue    = $this->keyPhrasesInBoldCount;
        $countAllValue = $this->keyPhrasesInBoldCountAll;

        return $this->extractKeywordMarkResult($countValue, $countAllValue);
    }


    public function getKeywordsInH1CountResult()
    {
        $countValue    = $this->keyPhrasesInH1Count;
        $countAllValue = $this->keyPhrasesInH1CountAll;

        return $this->extractKeywordMarkResult($countValue, $countAllValue);
    }


    public function getKeywordsInHOtherCountResult()
    {
        $countValue    = $this->keyPhrasesInOtherHCount;
        $countAllValue = $this->keyPhrasesInOtherHCountAll;

        return $this->extractKeywordMarkResult($countValue, $countAllValue);
    }

    public function getContentRating()
    {
        $results = [];

        $results[] = $this->getTitleLengthResult();
        $results[] = $this->getKeyPhrasesInTitleCountResult();

        $results[] = $this->getKeywordsInDescriptionCountResult();
        $results[] = $this->getKeywordsInKeywordsCountResult();

        $results[] = $this->getKeywordsInTextCountResult();

        $results[] = $this->getKeywordsInImgCountResult();
        $results[] = $this->getKeywordsInBoldCountResult();

        $results[] = $this->getKeywordsInH1CountResult();
        $results[] = $this->getKeywordsInHOtherCountResult();


        return $this->extractRatingResult($results);
    }

    public function getNoindexResult()
    {
        $messages = [
            5   => 'Не закрыты от индексации',
            20  => 'Не все закрыты от индексации',
            70  => 'Закрыты от индексации',
            100 => 'Отсутствуют',
        ];

        $icon = $this->noindexRating >= 70
            ? self::ICON_GOOD
            : self::ICON_BAD;

        $message = isset($messages[$this->noindexRating])
            ? $messages[$this->noindexRating]
            : '';
        return [$icon, $message, $this->noindexRating];
    }


    public function getInternalLinksCountResult()
    {
        $marks = [
            0  => [self::ICON_BAD, 'Слишком мало', 5],
            4  => [self::ICON_GOOD, 'Достаточно', 100],
            30 => [self::ICON_BAD, 'Слишком много', 40],
        ];

        return $this->extractMarkResult($this->internalLinksCount, $marks);
    }


    public function getTechRating()
    {
        $results   = [];
        $results[] = $this->getNoindexResult();
        $results[] = $this->getInternalLinksCountResult();

        return $this->extractRatingResult($results);
    }


    public function getSiteLinksCountResult($count)
    {
        $marks = [
            0    => [self::ICON_BAD, 'Слишком мало', 5],
            10    => [self::ICON_BAD, 'Недостаточно', 40],
            51   => [self::ICON_GOOD, 'Достаточно', 60],
            300 => [self::ICON_GOOD, 'Достаточно много', 100],
        ];

        return $this->extractMarkResult($count, $marks);
    }

    public function getExternalRating()
    {
        $results = [];

        $results[] = $this->getSiteLinksCountResult($this->siteLinksYahoo);

        return $this->extractRatingResult($results);
    }

    public function getTotalRating()
    {
        $ratings = [];

        $ratings[] = $this->getSearchEnginesRating();
        $ratings[] = $this->getContentRating();
        $ratings[] = $this->getTechRating();
        $ratings[] = $this->getExternalRating();

        $rating = count($ratings)
            ? round(array_sum($ratings) / count($ratings))
            : 0;

        $messages = [
            0  => 'Сайт плохо оптимизирован',
            20 => 'Сайт недостаточно оптимизирован',
            50 => 'Сайт хорошо оптимизирован',
            80 => 'Сайт отлично оптимизирован',
        ];
        $message  = null;
        foreach ($messages as $messageValue => $messageText) {

            if ($rating >= $messageValue) {
                $message = $messageText;
            }
        }

        return [$rating, $message];
    }


    public function init()
    {
        parent::init();

        $this->siteTitle = $this->_resultReport['{{TITLE}}'];

        $this->yandexTIC       = intval($this->_resultReport['{{TIZ}}']);
        $this->yandexTICLink   = $this->_resultReport['{{LINK_TIZ}}'];
        $this->yandexPages     = intval($this->_resultReport['{{PAGES1}}']);
        $this->yandexPagesLink = $this->_resultReport['{{LINK_YANDEX}}'];

        $this->googlePageRank  = intval($this->_resultReport['{{PR}}']);
        $this->googlePages     = intval($this->_resultReport['{{PAGES2}}']);
        $this->googlePagesLink = $this->_resultReport['{{LINK_GOOGLE}}'];


        $this->titleLength            = intval($this->_resultReport['{{STRLEN_TITLE}}']);
        $this->keyPhrasesInTitleCount = intval($this->_resultReport['{{FRAZA_TITLE_COUNT}}']);

        $this->keyPhrasesInDescriptionCount    = intval($this->_resultReport['{{FRAZA_DESC_COUNT}}']);
        $this->keyPhrasesInDescriptionCountAll = $this->_resultReport['{{FRAZA_DESC_COUNT_ALL}}'];
        $this->keyPhrasesInKeywordsCount       = intval($this->_resultReport['{{FRAZA_KEY_COUNT}}']);
        $this->keyPhrasesInKeywordsCountAll    = $this->_resultReport['{{FRAZA_KEY_COUNT_ALL}}'];

        $this->keyPhrasesInTextCount    = intval($this->_resultReport['{{FRAZA_TEXT_COUNT}}']);
        $this->keyPhrasesInTextCountAll = $this->_resultReport['{{FRAZA_TEXT_COUNT_ALL}}'];

        $this->keyPhrasesInImgAltCount    = intval($this->_resultReport['{{FRAZA_IMG_COUNT}}']);
        $this->keyPhrasesInImgAltCountAll = $this->_resultReport['{{FRAZA_IMG_COUNT_ALL}}'];
        $this->keyPhrasesInBoldCount      = intval($this->_resultReport['{{FRAZA_BOLD_COUNT}}']);
        $this->keyPhrasesInBoldCountAll   = $this->_resultReport['{{FRAZA_BOLD_COUNT_ALL}}'];

        $this->keyPhrasesInH1Count        = intval($this->_resultReport['{{FRAZA_H1_COUNT}}']);
        $this->keyPhrasesInH1CountAll     = $this->_resultReport['{{FRAZA_H1_COUNT_ALL}}'];
        $this->keyPhrasesInOtherHCount    = intval($this->_resultReport['{{FRAZA_OTHER_H_COUNT}}']);
        $this->keyPhrasesInOtherHCountAll = $this->_resultReport['{{FRAZA_OTHER_H_COUNT_ALL}}'];


        $this->externalLinksCount = intval($this->_resultReport['{{COUNT_SSILOK}}']);
        $this->internalLinksCount = intval($this->_resultReport['{{COUNT_SSILOK_VNUT}}']);
        $this->noindexRating      = intval($this->_resultReport['{{RATING_NOINDEX}}']);

        $this->siteLinksYahoo     = intval(preg_replace("/[^0-9,.]/", "", $this->_resultReport['{{yahoo_links_cnt}}']));
        $this->siteLinksYahooLink = $this->_resultReport['{{LINK_YAHOO_LINKS}}'];

        $this->siteLinksLinkpad     = intval(
            preg_replace("/[^0-9,.]/", "", $this->_resultReport['{{linkpad_links_cnt}}'])
        );
        $this->siteLinksLinkpadLink = $this->_resultReport['{{LINK_LINKPAD_LINKS}}'];

    }

    /**
     * @param $value
     * @param $marks
     *
     * @return null
     */
    private function extractMarkResult($value, $marks)
    {
        $value = intval($value);

        $result = null;
        foreach ($marks as $markValue => $markData) {
            if ($value >= $markValue) {
                $result = $markData;
            }
        }

        return $result;
    }

    /**
     * @param $results
     *
     * @return float|int
     */
    private function extractRatingResult($results)
    {
        $ratings = [];
        foreach ($results as $result) {
            $ratings[] = isset($result[2]) ? floatval($result[2]) : 0;
        }

        return count($ratings)
            ? round(array_sum($ratings) / count($ratings))
            : 0;
    }


    private $keywordMarks = [
        0       => [self::ICON_BAD, 'Не найдены', 5],
        'false' => [self::ICON_BAD, 'Есть, но не все', 50],
        'true'  => [self::ICON_GOOD, 'Все есть', 100],
    ];

    /**
     * @param $countValue
     * @param $countAllValue
     *
     * @return mixed
     */
    private function extractKeywordMarkResult($countValue, $countAllValue)
    {
        $result = null;
        if ($countValue) {
            $result = $countAllValue ? 'true' : 'false';
        } else {
            $result = 0;
        }
        return $this->keywordMarks[$result];
    }


}