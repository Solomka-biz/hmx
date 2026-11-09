<?php

class CalculatorLogDocument extends EMongoDocument
{
    /** @var array */
    public $keywords = array();

    /** @var  string */
    public $userHostAddress;
    /** @var  string */
    public $userAgent;

    /** @var MongoDate */
    public $datetime;

    function collectionName()
    {
        return 'CalculatorLogs';
    }

    /**
     * @param array|EMongoCriteria $criteria
     * @param array                $fields
     *
     * @return EMongoCursor|CalculatorLogDocument[]
     */
    public function findAll($criteria = array(), $fields = array())
    {
        return parent::findAll($criteria, $fields);
    }

    /**
     * @param string $className
     *
     * @return CalculatorLogDocument
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


}