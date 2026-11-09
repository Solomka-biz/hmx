<?php
/**
 *
 */
return array(

    'app.blocks.orderForm' => array(
        'baseUrl' => '/app/blocks/b-orderForm',
        'js'      => array('b-orderForm.js'),
        //'less'    => array('b-calculatorForm.less'),
        'css'     => array('b-orderForm.css'),
        'depends' => array(
            'libs.bem',
        ),
    )
);