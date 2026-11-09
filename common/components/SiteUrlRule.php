<?php
/**
 *
 */

class SiteUrlRule extends ContentUrlRule
{
    private static $map = array(
        /**  */
        'алгоритмы-поисковых-систем'  => 'algoritmi',
        'анализ-позиций'              => 'analiz_poziziy',
        'целевая-аудитория-в-рекламе' => 'auditoriya',
        'битые-внутренние-ссылки'     => 'bitie_ssilki',
        /**  */
        'analizsaita'                 => true,
        'avtorskie_prava'             => true,
        'begunkontext'                => true,
        'besplatnoesozdaniesaita'     => true,
        'besplatnosozdanie'           => true,
        'contextnaya_reklama'         => true,
        'createkeysait'               => true,
        'creatingandoptimazing'       => true,
        'creatingsait'                => true,
        'disain'                      => true,
        'dizainstudii'                => true,
        'dorway'                      => true,
        'effektivnayaraskrutka'       => true,
        'freereklama'                 => true,
        'histori'                     => true,
        'keysait'                     => true,
        'keysaitmaking'               => true,
        'kloaking'                    => true,
        'kontekst_internet_reklama'   => true,
        'kontekstnaya_reklama'        => true,
        'korporativnyi'               => true,
        'list'                        => true,
        'makingsait'                  => true,
        'metodraskrutki'              => true,
        'optimizaciasaita'            => true,
        'optimizsaita'                => true,
        'optimizsaitahtml'            => true,
        'otchet_o_prodvigenii'        => true,
        'otchet_po_raskrutke_saitov'  => true,
        'poiskoptimiz'                => true,
        'poiskoptimizacia'            => true,
        'poiskovaiaoptimaz'           => true,
        'poiskovayakontextnaya'       => true,
        'poiskovayaoptimizazia'       => true,
        'poiskovayaoptimizsaita'      => true,
        'poseshaemost'                => true,
        'prodvigenieinternet'         => true,
        'prodvigenieuslugi'           => true,
        'prodvigenieweb'              => true,
        'prodvigensait'               => true,
        'raskrutkaprodvigenie'        => true,
        'raskrutkasaita'              => true,
        'raskrutkasaitagaratntia'     => true,
        'raskrutkasaitow'             => true,
        'raskrutkavpoisk'             => true,
        'raskrutkawebsaita'           => true,
        'razrabotatsait'              => true,
        'razrabotkapodklyuch'         => true,
        'reklamainternet'             => true,
        'reklamasaitow'               => true,
        'reklamavnete'                => true,
        'saitovoptimiz'               => true,
        'saitpodklyuch'               => true,
        'saitvizitkacreate'           => true,
        'sozdanieiraskrutka'          => true,
        'sozdanieoptimizacia'         => true,
        'sozdanierasktutka'           => true,
        'sozdaniesaitaweb'            => true,
        'sozdaniesaitoviraskrutka'    => true,
        'sozdaniesaitraskruti'        => true,
        'sozdaniewebsaita'            => true,
        'sozdanieyoptimizac'          => true,
        'sozdanieyraskrutka'          => true,
        'sozdavatsait'                => true,
        'sravnenie_servisov'          => true,
        'sravnenie_servisov_analiza'  => true,
        'stoimostreklamy'             => true,
        'vizitkacreating'             => true,
        'websaitcreating'             => true,
        'webstudia'                   => true,
        'zenaraskrutki'               => true,
        'zenasozdania'                => true,
        /*  */
        'best'                        => true,
        'bitie_ssilki'                => true,
        'context'                     => true,
        'intereklama'                 => true,
        'internetprodvigenie'         => true,
        'internetreclama'             => true,
        'internetreklama'             => true,
        'internetreklamka'            => true,
        'kontextreclama'              => true,
        'prodvigenie'                 => true,
        'prodvigeniereklama'          => true,
        'prodvigeniesaitika'          => true,
        'prodvigenivinternet'         => true,
        'raskrutka_saita'             => true,
        'raskrutkasites'              => true,
        'reklamavinternet'            => true,
        'reklamavinternete'           => true,
        'seoprodvigenie'              => true,
        'sozdaniesaita'               => true,
        'zakagite_raskrutku'          => true,
    );

    function getContentMap()
    {
        return self::$map;
    }

    function getBasicRount()
    {
        return 'site/content';
    }


    public static function contentMap()
    {
        return array_keys(self::prepareContentMap(self::$map));
    }
}