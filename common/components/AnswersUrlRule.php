<?php
/**
 *
 */

class AnswersUrlRule extends ContentUrlRule
{
    private static $map = array(
        'как-соблюсти-авторские-права'              => 'avtorskiye_prava',
        'аудит-сайта'                               => 'audit_saita',
        'что-может-являться-динамическим-контентом' => 'dinamik_content',
        'как-указать-яндексу-регион-сайта'          => 'kak_ukazat_region_saita',
        'логи-статистики-сайта'                     => 'logi_statistiki_saita',
        /**  */
        'chto_takoye_mediynaya_reklama'             => true,
        'esli_ukrali_kontent'                       => true,
		'kak_nastroit_remarketing_google_adwords'   => true,
        'kak_polzovatsya_webmasterom'               => true,
        'kak_sostavit_semant_jadro'                 => true,
        'kak_uskority_indexsaziyu'                  => true,
        'razmeshenie_statey'                        => true,
        'registraziya_v_katalogah'                  => true,
        's_chego_nachinaetsya_prodvigenie'          => true,
        /**  */
        'besplatnoesozdanie'                        => true,
        'disainstudii'                              => true,
        'dizain'                                    => true,
        'dizainsaita'                               => true,
        'dizainsaitika'                             => true,
        'dizainstudia'                              => true,
        'freesozdanie'                              => true,
        'izgotovleniesaita'                         => true,
        'izgotovleniesaitika'                       => true,
        'izgotovleniesaitov'                        => true,
        'kontekstnareklama'                         => true,
        'kontextwhat'                               => true,
        'korporativnyesaity'                        => true,
        'korporativnyisait'                         => true,
        'korporativnyisaitik'                       => true,
        'korporativsait'                            => true,
        'korporotivka'                              => true,
        'moscowsite'                                => true,
        'moskvasaitsaozdanie'                       => true,
        'predlogeniyaporaskrutkesaitov'             => true,
		'povishenie_prodaj'                         => true,
        'pricesaitmaking'                           => true,
        'prodvigeniesaitow'                         => true,
        'raskrutka'                                 => true,
        'razrabotkasait'                            => true,
        'razrabotkasaita'                           => true,
        'razrabotkasaitika'                         => true,
        'razrabotkasita'                            => true,
        'reklamasaitov'                             => true,
        'reklamka'                                  => true,
        'reklamkasaitov'                            => true,
        'reklamnoeagentstvo'                        => true,
        'saitaizgotovlenie'                         => true,
        'saitdizain'                                => true,
        'saitmake'                                  => true,
        'saitmakemoscow'                            => true,
        'saitmaking'                                => true,
        'saitmakingmoscow'                          => true,
        'saitmakingprice'                           => true,
        'saitpodkluch'                              => true,
        'saitvizitkasozdat'                         => true,
        'saitvizitki'                               => true,
        'sitecreating'                              => true,
        'sitemaking'                                => true,
        'sozdaniecost'                              => true,
        'sozdaniemoskva'                            => true,
        'sozdanieprise'                             => true,
        'sozdaniesaitaceny'                         => true,
        'sozdaniesaitavizitki'                      => true,
        'sozdaniesaitika'                           => true,
        'sozdaniesaitov'                            => true,
        'sozdaniesita'                              => true,
        'sozdaniestoimost'                          => true,
        'sozdaniestoit'                             => true,
        'sozdanieyoptimiz'                          => true,
        'sozdanisaita'                              => true,
        'sozdaniyesaita'                            => true,
        'stoimostsozdania'                          => true,
        'stoitsozdat'                               => true,
        'stosozdania'                               => true,
        'studiadizaina'                             => true,
        'tsenysozdaniya'                            => true,
        'vizitkacreate2'                             => true,
        'websait'                                   => true,
        'webstudii'                                 => true,
        'webstudiya'                                => true,
        'webstudiyi'                                => true,
    );

    function getContentMap()
    {
        return self::$map;
    }

    function getBasicRount()
    {
        return 'answers/index';
    }

    public static function contentMap()
    {
        return array_keys(self::prepareContentMap(self::$map));
    }

}