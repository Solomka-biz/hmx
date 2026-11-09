<?php
/**
 *
 */

class WordstatReportInfo
{
    private $phrase;

    /** @var  WordstatItem[] */
    private $searchedWith = [];

    /** @var  WordstatItem[] */
    private $searchedAlso = [];

    function __construct($phrase)
    {
        $this->phrase = $phrase;
    }

    public static function createFromData($phrase, $searchedWith, $searchedAlso)
    {
        $self = new self($phrase);

        foreach ($searchedWith as $item) {
            $itemObj = new WordstatItem($item['Phrase'], $item['Shows']);

            $self->searchedWith[$itemObj->getPhrase()] = $itemObj;
        }

        foreach ($searchedAlso as $item) {
            $itemObj = new WordstatItem($item['Phrase'], $item['Shows']);

            $self->searchedAlso[$itemObj->getPhrase()] = $itemObj;
        }

        return $self;
    }

    /**
     * @return mixed
     */
    public function getPhrase()
    {
        return $this->phrase;
    }

    /**
     * @return \WordstatItem[]
     */
    public function getSearchedAlso()
    {
        return $this->searchedAlso;
    }

    /**
     * @return \WordstatItem[]
     */
    public function getSearchedWith()
    {
        return $this->searchedWith;
    }


}
