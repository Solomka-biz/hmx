<?php
/**
 *
 */

class OrderForm extends CFormModel
{

    const SCENARIO_DEFAULT    = 'default';
    const SCENARIO_CALCULATOR = 'calculator';

    public function __construct($scenario = self::SCENARIO_DEFAULT)
    {
        parent::__construct($scenario);
    }


    public $name;
    public $phone;
    public $url;
    public $email;
	public $massage;

    public $discount = 0;
    public $totalCostWithDiscount = 0;

    /** @var WordstatItem[] */
    public $keywords = [];
    /** @var WordstatItem[] */
    public $hintwords = [];


    public function rules()
    {
        $attibutesNames = 'name, phone, url, email, massage';
        return array(
            array(
                $attibutesNames,
                'EmptyNullValidator'
            ),
            array(
                'name',
                'required',
                'message' => 'Пожалуйста, введите имя'
            ),
            array(
                'email',
                'required',
                'message' => 'Пожалуйста, введите адрес электронной почты'
            ),

        );
    }


}