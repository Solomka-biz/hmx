<?php
/**
 *
 */
return array(

    'app.layouts.page' => array(
        'baseUrl' => '/app',
        'js'      => array('app.js'),
        'depends' => array(
            'libs.bem',
            'app.blocks.yandexMetrika',
            'app.blocks.googleAnalytics',
            'app.blocks.dialog',
        ),
    )
);