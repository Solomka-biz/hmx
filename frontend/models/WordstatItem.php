<?php
/**
 *
 */

class WordstatItem
{
    private $phrase;
    private $shows;

    private $price = null;

    function __construct($phrase, $shows)
    {
        $this->phrase = $phrase;
        $this->shows  = $shows;
    }

    /**
     * @return mixed
     */
    public function getPhrase()
    {
        return $this->phrase;
    }

    /**
     * @return mixed
     */
    public function getShows()
    {
        return $this->shows;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}
