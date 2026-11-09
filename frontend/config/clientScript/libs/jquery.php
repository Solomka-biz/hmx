<?php
/**
 *
 */

return array(

    'libs.jquery'                => array(
        'baseUrl' => '/libs/jquery',
        'js'      => array(
            'jquery-1.12.4.js',
            'jquery-migrate.js',
            'plugins/jquery.bgiframe-2.1.2.js',
            'plugins/jquery.cookie.js',
            'plugins/jquery.json-2.2.js',
            'plugins/jquery.metadata.js',
            'plugins/jquery.color.js',
            'plugins/bootstrap.bundle.min.js',
        )
    ),
    'libs.jquery.jloupe'         => array(
        'baseUrl' => '/libs/jquery.jloupe',
        'js'      => array('jquery.jloupe.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.mousewheel'     => array(
        'baseUrl' => '/libs/jquery.mousewheel',
        'js'      => array('jquery.mousewheel.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.inherit'        => array(
        'baseUrl' => '/libs/jquery.inherit',
        'js'      => array('inherit.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.identify'       => array(
        'baseUrl' => '/libs/jquery.identify',
        'js'      => array('identify.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.debounce'       => array(
        'baseUrl' => '/libs/jquery.debounce',
        'js'      => array('debounce.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.observable'     => array(
        'baseUrl' => '/libs/jquery.observable',
        'js'      => array('observable.js',),
        'depends' => array('libs.jquery', 'libs.jquery.inherit'),
    ),
    'libs.jquery.tmpl'           => array(
        'baseUrl' => '/libs/jquery.tmpl',
        'js'      => array('jquery.tmpl.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.dataset'        => array(
        'baseUrl' => '/libs/jquery.dataset',
        'js'      => array('jquery.dataset.js', 'jquery.datasetFilter.js'),
        'depends' => array('libs.jquery'),
    ),
    'libs.jquery.mustache'       => array(
        'baseUrl' => '/libs/mustache',
        'js'      => array('jquery.mustache.js',),
        'depends' => array('libs.jquery', 'libs.mustache'),
    ),
    'libs.jquery.plainText'      => array(
        'baseUrl' => '/libs/jquery-plainText',
        'js'      => array('jquery-plainText.js',),
        'depends' => array('libs.jquery'),
    ),
    'libs.jquery.placeholder'    => array(
        'baseUrl' => '/libs/jquery.placeholder-enhanced',
        'js'      => array('jquery.placeholder-enhanced.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.hotkeys'        => array(
        'baseUrl' => '/libs/jquery-hotkeys',
        'js'      => array('jquery.hotkeys.js',),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.custom'         => array(
        'baseUrl' => '/libs',
        'js'      => array('ajax.js', 'redirect.js'),
        'depends' => array('libs.jquery',),
    ),
    'libs.jquery.ndd'            => array(
        'baseUrl' => '/libs/jquery.ndd',
        'js'      => array('jquery.ndd.js',),
        'depends' => array('libs.jquery'),
    ),
    'libs.jquery.scrollTo'       => array(
        'baseUrl' => '/libs/jquery.scrollTo',
        'js'      => array('jquery.scrollTo.js',),
        'depends' => array('libs.jquery'),
    ),
    'libs.jquery.elastic'        => array(
        'baseUrl' => '/libs/jquery.elastic',
        'js'      => array('jquery.elastic.js',),
        'depends' => array('libs.jquery'),
    ),
    'libs.jquery.putCursorAtEnd' => array(
        'baseUrl' => '/libs/jquery.putCursorAtEnd',
        'js'      => array('jquery.putCursorAtEnd.js',),
        'depends' => array('libs.jquery'),
    ),

);
