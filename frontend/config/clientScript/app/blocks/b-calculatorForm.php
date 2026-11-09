<?php
/**
 *
 */
return array(

    'app.blocks.calculatorForm' => array(
        'baseUrl' => '/app/blocks/b-calculatorForm',
        'js'      => array('b-calculatorForm.js'),
        //'less'    => array('b-calculatorForm.less'),
        'css'     => array('b-calculatorForm.css'),
        'depends' => array(
            'libs.bem',
        ),
    )
);