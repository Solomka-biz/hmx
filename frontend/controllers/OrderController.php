<?php
/**
 *
 */

final class OrderController extends PageController
{
    public function init()
    {
        parent::init();
        $this->defaultAction = 'index';
    }

    public function actionIndex()
    {
        $request = \Yii::app()->getRequest();

        $form = new OrderForm($request->getParam('scenario'));

        if ($request->getIsPostRequest()) {


            $formData = $request->getParam('order');
            if (array_key_exists('keywords', $formData) && is_array($formData['keywords'])) {
                $formData['keywords'] = array_map(
                    function ($value) {
                        return unserialize(base64_decode($value));
                    },
                    $formData['keywords']
                );
            } else {
                $formData['keywords'] = array();
            }
            if (array_key_exists('hintwords', $formData) && is_array($formData['hintwords'])) {
                $formData['hintwords'] = array_map(
                    function ($value) {
                        return unserialize(base64_decode($value));
                    },
                    $formData['hintwords']
                );
            } else {
                $formData['hintwords'] = array();
            }

            $form->setAttributes($formData, false);

            if ($form->validate()) {

                $subject = "Заказ с сайта hmx.ru";
                // тут нужно отправить письмо
                $letter = $this->renderPartial(
                    "//letters/order",
                    array('form' => $form, 'remoteIP' => $request->getUserHostAddress()),
                    true
                );

                $this->sendLetter($subject, $letter);

                $this->render('//order/result', array('form' => $form));
                return;
            }
        }

        $this->render('//order/order', array('form' => $form));
    }


}