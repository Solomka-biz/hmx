<?php
/**
 *
 */
return array(

    'app.blocks.calculatorTable' => array(
        'baseUrl' => '/app/blocks/b-calculatorTable',
        'js'      => array('b-calculatorTable.js'),
        //'less'    => array('b-calculatorTable.less'),
        'css'     => array('b-calculatorTable.css'),
        'depends' => array(
            'libs.bem',
        ),
    )
);