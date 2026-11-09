<?php
/**
 *
 */

class FeedbackForm extends CFormModel
{

    const SCENARIO_DEFAULT    = 'default';

    public function __construct($scenario = self::SCENARIO_DEFAULT)
    {
        parent::__construct($scenario);
    }

    public $message;
    public $phone;
	public $url;

    public function rules()
    {
        $attibutesNames = 'message, phone, url';
        return array(
            array(
                $attibutesNames,
                'EmptyNullValidator'
            ),
            array(
                'message',
                'required',
                'message' => 'Пожалуйста, введите сообщение'
            ),
            array(
                'phone',
                'required',
                'message' => 'Пожалуйста, введите номер телефона'
            ),
        );
    }


}