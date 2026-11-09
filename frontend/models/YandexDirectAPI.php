<?php
/**
 *
 */

class YandexDirectAPI
{
    /** @var  YandexDirectClient */
    protected $client;

    public function __construct(YandexDirectClient $client)
    {
        $this->client = $client;
    }

    public function pingAPI()
    {

        $data = $this->client->run('PingAPI');

        return intval($data);
    }

    /**
     * @param array    $phrases
     * @param int|null $regionId
     *
     * @return int
     */
    public function createNewWordstatReport(array $phrases, $regionId = null)
    {
        $params = array(
            'Phrases' => $phrases
        );
        if (isset($regionId)) {
            $params['GeoID'] = $regionId;
        }

        $data = $this->client->run('CreateNewWordstatReport', $params);

        return intval($data);
    }

    /**
     * @return WordstatReport[]
     */
    public function getWordstatReportList()
    {
        $data = $this->client->run('GetWordstatReportList');
        $list = array();
        foreach ($data as $report) {
            $reportObj = new WordstatReport($report['ReportID'], $report['StatusReport']);

            $list[$reportObj->getId()] = $reportObj;
        }
        return $list;
    }

    /**
     * @param int $reportId
     */
    public function deleteWordstatReport($reportId)
    {
        $this->client->run('DeleteWordstatReport', intval($reportId));
    }


    /**
     * @param $reportId
     *
     * @return WordstatReport
     */
    public function getWordstatReport($reportId)
    {
        $data   = $this->client->run('GetWordstatReport', intval($reportId));
        $report = new WordstatReport($reportId, WordstatReport::STATUS_DONE);

        $results = array();
        foreach ($data as $info) {
            $infoObj = WordstatReportInfo::createFromData(
                $info['Phrase'],
                $info['SearchedWith'],
                array_key_exists('SearchedAlso', $info) ? $info['SearchedAlso'] : []
            );

            $results[$infoObj->getPhrase()] = $infoObj;
        }
        $report->setResults($results);
        return $report;
    }


}
