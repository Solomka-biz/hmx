<?php
/**
 *
 */

class TagsUrlRule extends ContentUrlRule
{
    private static $map = array(
        'effectivnostreklami'         => true,
        'effektivnaya_reklama'        => true,
        'internetprodvijenie'         => true,
        'internetreklamasaita'        => true,
        'kontekstnayareklama'         => true,
        'kontent_analiz'              => true,
        'konversiya'                  => true,
        'marketingprodvigenie'        => true,
        'metodi_prodvigeniya'         => true,
        'metodi_reklami'              => true,
        'opredelenie_poziziy'         => true,
        'optimizaziya_saita'          => true,
        'poddergka_saita'             => true,
        'poiskovaya_internet_reklama' => true,
        'poiskovaya_optimizaziya'     => true,
        'poiskovaya_raskrutka'        => true,
        'poiskovaya_raskrutka_saita'  => true,
        'poiskovayaraskrutka'         => true,
        'poiskovayareklama'           => true,
        'poiskovayareklamasaita'      => true,
        'poiskovoeprodvigenie'        => true,
        'poiskovoeprodvigeniesaita'   => true,
        'pozizii_saita'               => true,
        'prodaga_reklami'             => true,
        'prodvigenie_optimizaziya'    => true,
        'prodvigenie_saita_marketing' => true,
        'prodvigeniesaitavinternete'  => true,
        'raskrutka_optimizazia'       => true,
        'razmesheniereklami'          => true,
        'reclamavinternete'           => true,
        'reklama'                     => true,
        'reklamaiprodvigenie'         => true,
        'reklamaonline'               => true,
        'reklamavrossii'              => true,
        'semanticheskoye_yadro'       => true,
        'seo'                         => true,
        'seo_optimizaziya'            => true,
        'sozdanieinternetreklami'     => true,
        'sozdanieiprodvigeniesaitov'  => true,
        'stoimostreklami'             => true,
        'vidreklami'                  => true,

    );

    function getContentMap()
    {
        return self::$map;
    }

    function getBasicRount()
    {
        return 'tags/index';
    }

    public static function contentMap()
    {
        return array_keys(self::prepareContentMap(self::$map));
    }

}