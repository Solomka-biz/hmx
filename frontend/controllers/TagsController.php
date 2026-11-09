<?php
/**
 *
 */

final class TagsController extends PageController
{
    public function actionIndex($content = '')
    {

        if (!$content) {
            $this->render('//tags/tags');
        } elseif (in_array($content, TagsUrlRule::contentMap())) {
            $this->render('//tags/content', array('content' => $content));
        } else {
            $this->redirect(\Yii::link()->site(), true, 307);
        }

    }
}