<?php
/**
 *
 */

class CalculatorForm extends CFormModel
{
    const SCENARIO_INITIAL = 'initial';
    const SCENARIO_UPDATE  = 'update';

    public $url;
    public $phone;

    public $keywords = array();
    public $addKeywords = array();
    public $removeKeywords = array();

    public $hintwords = array();
    public $addHintwords = array();
    public $removeHintwords = array();

    public $ignoredHintwords = array();


    public function rules()
    {
        $keywordAttributes  = "keywords,  removeKeywords,  addKeywords";
        $hintwordAttributes = "hintwords, removeHintwords, addHintwords, ignoredHintwords";

        return array(
            array(
                "url, phone",
                'EmptyNullValidator',
                'trimValue' => true
            ),
            array(
                $keywordAttributes,
                'EmptyNullValidator'
            ),
            array(
                $hintwordAttributes,
                'EmptyNullValidator'
            ),
            array(
                $keywordAttributes,
                'filter',
                'filter' => array($this, 'parsePhrase'),
            ),
            array(
                $hintwordAttributes,
                'filter',
                'filter' => array($this, 'parsePhrase'),
            ),
            array(
                $keywordAttributes,
                'type',
                'type' => 'array',
            ),
            array(
                $hintwordAttributes,
                'type',
                'type' => 'array',
            ),
            /*            array(
                            'keywords',
                            'checkKeywords',
                            'message' => 'Пожалуйста, введите ключевые слова/фразы'
                        ),*/
            array(
                "keywords",
                'filter',
                'filter' => array($this, 'filterKeywords'),
            ),
            array(
                "hintwords",
                'filter',
                'filter' => array($this, 'filterHintwords'),
            ),
            array(
                'url',
                'required',
                'message' => 'Пожалуйста, введите адрес сайта'
            ),
            array(
                'phone',
                'required',
                'message' => 'Пожалуйста, введите номер телефона'
            ),
            array(
                'keywords',
                'required',
                'message' => 'Пожалуйста, введите ключевые слова/фразы'
            ),
        );
    }

    public function parsePhrase($value)
    {
        $keywords = [];

        $strings = explode("\n", trim($value));

        foreach ($strings as $string) {
            $string = trim($string);

            $phrases = explode(',', $string);
            $phrases = array_map('trim', $phrases);
            foreach ($phrases as $phrase) {
                if (!empty($phrase)) {

                    $phrase            = mb_strtolower($phrase);
                    $keywords[$phrase] = true;
                }
            }
        }

        return array_keys($keywords);
    }

    public function filterKeywords()
    {

        $words = array();
        foreach ($this->keywords as $word) {
            $words[$word] = true;
        }
        foreach ($this->removeKeywords as $word) {
            $words[$word] = false;
        }
        foreach ($this->addKeywords as $word) {
            $words[$word] = true;
        }

        $words = array_filter($words);

        return array_keys($words);
    }

    public function filterHintwords()
    {

        $words = array();
        foreach ($this->hintwords as $word) {
            $words[$word] = true;
        }
        foreach ($this->removeHintwords as $word) {
            $words[$word] = false;
        }
        foreach ($this->addHintwords as $word) {
            $words[$word] = true;
        }

        $words = array_filter($words);

        return array_keys($words);
    }


    public function checkKeywords($attribute, $params)
    {

        if (!$this->hasErrors()) {
            if (empty($this->keywords)) {
                $this->addError($attribute, $params['message']);
            }
        }
    }
}