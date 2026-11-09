<?php
/**
 *
 */

final class AnswersController extends PageController
{

    public function actionIndex($content = '')
    {
        if (!$content) {
            $this->render('//answers/answers');
        } elseif (in_array($content, AnswersUrlRule::contentMap())) {
            $this->render('//answers/content', array('content' => $content));
        } else {
            $this->redirect(\Yii::link()->site(), true, 307);
        }
    }
}