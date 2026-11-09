<?php
/**
 *
 */
return array(
    'class'          => 'UrlManager',
    'urlFormat'      => CUrlManager::PATH_FORMAT,
    'urlSuffix'      => '',
    'rules'          => array(


        array('class' => 'AnswersUrlRule'),
        array('class' => 'TagsUrlRule'),
        array('class' => 'WikiUrlRule'),
        array('class' => 'SiteUrlRule'),
        '/энциклопедия_интернет_рекламы.html' => '/wiki/index',
        '/answers.html'                       => '/answers/index',
		'/tags.html'                             => '/tags/index',
        /** @see UrlManager::SITE_ACTION_CONTACTS */
        '/contacts.html'                      => '/site/contacts',
        /** @see UrlManager::SITE_ACTION_MAP */
        '/map.html'                           => '/site/map',
        /** @see UrlManager::SITE_ACTION_ACTION */
        '/akziya.html'                        => '/site/action',
        /** @see UrlManager::SITE_ACTION_FOR_CLIENTS */
        '/clientam.html'                      => '/site/forClients',
        /** @see UrlManager::SITE_ACTION_REPORT */
        '/report.html'                        => '/site/report',
        /** @see UrlManager::SITE_ACTION_PRICES */
        '/zeni.html'                          => '/site/prices',
        /** @see UrlManager::SITE_ACTION_GUARANTEE */
        '/guaranted.html'                     => '/site/guarantee',
        /** @see UrlManager::SITE_ACTION_ABOUT */
        '/about.html'                         => '/site/about',
        /** @see UrlManager::SITE_ACTION_ANALIZER */
        '/analizer.html'                      => '/site/analizer',
        /** @see UrlManager::SITE_ACTION_DISCOUNT */
        '/discount.html'                      => '/site/discount',
        /** @see UrlManager::SITE_ACTION_INDEX */
        '/'                                   => '/site/index',
		'/sitefree.html'                      => '/site/sitefree',
        /** ---  **/
        '/portfolio-<year:[\d]+>.html'        => '/portfolio/index',
        '/portfolio.html'                     => '/portfolio/index',
        '/zakaz.html'                         => '/order/index',
        '/feedback'                         => '/feedback/index',
        /** калькулятор **/
        '/calculator/'                        => [
            'urlSuffix' => '/',
            '/calculator/index'
        ],
        '/calc/'                              => [
            'urlSuffix' => '/',
            '/calculator/oldVersion'
        ],
        '/calc.html'                          => '/calculator/oldVersion',
        /** остальное  **/
        //
        '<controller:\w+>/<action:\w+>'       => '<controller>/<action>',

    ),
    'showScriptName' => false,
    'caseSensitive'  => true,
);