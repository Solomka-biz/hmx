<?php
/**
 *
 */

class AdminController extends PageController
{

    public function init()
    {
        parent::init();
        $this->layout = '/layout/admin';
    }

    public function actionIndex()
    {

        $logs     = array();
        $criteria = new EMongoCriteria();
        $criteria->setSort(
            array(
                'datetime' => -1,
            )
        );
        $cursor = CalculatorLogDocument::model()->findAll($criteria);
        foreach ($cursor as $document) {
            $logs[] = $document;
        }

        $this->render("index", array('logs' => $logs));
    }

    public function filters()
    {
        return array(
            array(
                'HttpAuthFilter',
                'users' => array('admin' => 'rhexedthxe'),
                'realm' => 'Admin section'

            )
        );
    }


}