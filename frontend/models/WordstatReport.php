<?php
/**
 *
 */

class WordstatReport
{

    const STATUS_DONE    = 'Done';
    const STATUS_PENDING = 'Pending';


    private $reportId;
    private $status;

    /** @var WordstatReportInfo[] */
    private $results = [];

    function __construct($reportId, $status)
    {
        $this->reportId = $reportId;
        $this->status   = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->reportId;
    }


    public function isDone()
    {
        return $this->status == self::STATUS_DONE;
    }

    /**
     * @return \WordstatReportInfo[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param \WordstatReportInfo[] $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }


}
