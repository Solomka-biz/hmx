<?php
/**
 *
 */

final class WikiController extends PageController
{
    public function actionIndex($content = '')
    {

        if (!$content) {
            $this->render('//wiki/wiki');
        } elseif (in_array($content, WikiUrlRule::contentMap())) {
            $this->render('//wiki/content', array('content' => $content));
        } else {
            $this->redirect(\Yii::link()->site(), true, 307);
        }

    }
}