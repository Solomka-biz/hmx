<?php
/**
 *
 */

final class PortfolioController extends PageController
{


    private $portfolioYears = array(
        '2012' => true,
        '2011' => true,
        '2010' => true,
        '2009' => true,
        '2008' => true,
        '2007' => true,
        '2006' => true,
        '2005' => true,
        '2004' => true,
        '2003' => true,
        '2002' => true,
        '2001' => true,
    );

    public function actionIndex($year = null)
    {
        if (!$year) {
            $year = '2012';
        }


        if (array_key_exists($year, $this->portfolioYears)) {
            $this->render(
                '//portfolio/portfolio',
                array(
                    'allYears' => array_keys($this->portfolioYears),
                    'year'     => $year
                )
            );

        } else {
            $this->redirect('/', true, 307);
        }
    }
}