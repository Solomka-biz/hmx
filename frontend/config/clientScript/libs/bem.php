<?php
return array(
    'libs.bem' => array(
        'baseUrl' => '/libs/bem',
        'js'      => array(
            'bem.js',
            'bem.internal.js',
            'bem.dom.js',
            'bem.log.js',
            'bem.proxy.js',
        ),
        'depends' => array(
            'libs.jquery',
            'libs.jquery.inherit',
            'libs.jquery.identify',
            'libs.jquery.debounce',
            'libs.jquery.observable',
//            'libs.jquery.tmpl',
//            'libs.jquery.scrollTo',
        )
    ),
);