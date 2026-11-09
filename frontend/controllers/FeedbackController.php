<?php
/**
 *
 */

final class FeedbackController extends PageController
{
    public function init()
    {
        parent::init();
        $this->defaultAction = 'index';
    }

    public function actionIndex()
    {
        $request = \Yii::app()->getRequest();

        $result = array();
        $form = new FeedbackForm('default');

        if ($request->getIsPostRequest() && $request->isAjaxRequest) {

            $form->attributes = $request->getPost('feedback');

            if ($result['status'] = $form->validate()) {

                $subject = "Сообщение с сайта hmx.ru";
                // тут нужно отправить письмо
                $letter = $this->renderPartial(
                    "//letters/feedback",
                    array('form' => $form, 'remoteIP' => $request->getUserHostAddress()),
                    true
                );

                $this->sendLetter($subject, $letter);

            } else {

                $result['errors'] = $form->getErrors();
            }


            $this->render('//feedback/feedback', array('result' => $result));
            return;
        }

        $this->redirect('/');
    }


}