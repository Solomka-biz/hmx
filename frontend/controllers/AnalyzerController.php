<?php

/**
 *
 */
class AnalyzerController extends PageController
{


    public function actionResult()
    {
        $request = \Yii::app()->getRequest();

        $url      = $this->formatUrl($request->getParam('url'));
        $useCache = (bool)$request->getParam('useCache', true);


        if (!$url) {
            $this->redirect(
                \Yii::link()->site(
                    UrlManager::SITE_ACTION_ANALIZER,
                    [
                        'analyzerError' => true,
                    ]
                )
            );
            return;
        }


        $result = $this->getAnalyzeReport($url, $useCache);
        //VarDumper::dump($result);

        $report = new AnalizeReport($url, $result);

        $this->render(
            '//analyzer/result',
            [
                'url'    => $url,
                'report' => $report,
            ]
        );

    }

    private function formatUrl($url)
    {
        $url = trim($url);
        $url = str_replace("http://", "", $url);
        $url = str_replace("https://", "", $url);

        if ($url) {
            $url = '//' . $url;
        }

        $host = @parse_url($url, PHP_URL_HOST);

        // If the URL can't be parsed, use the original URL
        // Change to "return false" if you don't want that
        if (!$host) {
            $host = $url;
        }

        return $host;
    }


    private $seoAnalyzerUrl = 'www.seoanalizator.ru/jsonapi.php?url=';

    private function getAnalyzeReport($url, $useCache = false)
    {
        $urlKey = "seoAnalyzer:result:" . $url;

        if ($useCache && ($resultReport = \Yii::app()->getCache()->get($urlKey))) {
            return $resultReport;
        }

        $resultReport = json_decode(remote_get_contents($this->seoAnalyzerUrl . $url), true);

        \Yii::app()->getCache()->set($urlKey, $resultReport, 3 * 60 * 60);

        return $resultReport;
    }
}

function remote_get_contents($url)
{
    if (function_exists('curl_get_contents') AND function_exists('curl_init')) {
        return curl_get_contents($url);
    } else {
        // A litte slower, but (usually) gets the job done
        return file_get_contents($url);
    }
}

function curl_get_contents($url)
{
    // Initiate the curl session
    $ch = curl_init();

    // Set the URL
    curl_setopt($ch, CURLOPT_URL, $url);

    // Removes the headers from the output
    curl_setopt($ch, CURLOPT_HEADER, 0);

    // Return the output instead of displaying it directly
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute the curl session
    $output = curl_exec($ch);

    // Close the curl session
    curl_close($ch);

    // Return the output as a variable
    return $output;
}