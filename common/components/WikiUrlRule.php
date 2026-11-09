<?php
/**
 *
 */

class WikiUrlRule extends ContentUrlRule
{
    private static $map = array(
        'avtorisazia'              => true,
        'ags'                      => true,
		'algoritmy-ps'             => true,
		'alt'                      => true,
		'алиас'                    => 'alias',
        'анкор'                    => 'ancor',
        'апдейт'                   => 'up',
		'aps'                      => true,
        'arhitektura_saita'        => true,
		'audit_saita'              => true,
		'affiliat'              => true,
        //
        'бан'                      => 'ban',
		'bannernaya_reklama'       => true,
		'belaya_optimizaciya'      => true,
		'b2b'                      => true,
        'brauzer'                  => true,
        'bistrorobot'              => true,
		'birga_ssilok'              => true,
		'birga_statei'              => true,
        'budjet_reklamnyj'         => true,
        //
        'validnost'                => true,
		 'vebvizor'                => true,
		'verefikaciya'             => true,
        'верстка'                  => 'verstka',
		'vechnaya_ssilka'          => true,
		'vidimost_saita'           => true,
		'vneshnie_ssilki'          => true,
		'vnutrennyaya_optimizatciya'=> true,
        'vidacha'                  => true,
		'vozrast-stranicy'                  => true,
        //
        'garantii_v_prodvisenii'   => true,
        'geo'                      => true,
		'gs'                      => true,
		'home'                      => true,
        //
        'demograficeski_targeting' => true,
        'dorvei'                   => true,
        'dubli'                    => true,
        'домен'                    => 'domen',
        //
        'estestvennie_ssilki'      => true,
        //
        'girnaja_ssilka'           => true,
        //
        'запрос'                   => 'zapros',
		'zamorozka_ssilok'         => true,
        'zerkalo'                  => true,
        //
        'invite'                   => true,
        'indeks'                   => true,
        'индексация'               => 'indeksaziya',
		'internet_marketing'       => true,
		'internet_reklama'         => true,
        //
        'captcha'                  => true,
        'katalog'                  => true,
        'click'                    => true,
        'cloaking'                 => true,
        'контент.html'             => 'content',
        'keys'                     => true,
        'конверсия.html'           => 'konversia',
		'kopiraiting'              => true,
		'karta-saita'           => true,
        'kornevaja-directoria'     => true,
		'kross_posting'           => true,
        'cookies'                  => true,
        'kesh'                     => true,
        //
		'lending'                  => true,
        'linkopomoika'             => true,
        'logotip'                  => true,
        'login'                    => true,
        //
		'mediinaya_reklama'        => true,
		'mediino_kontextnaya_reklama'    => true,
        'metategi'                 => true,
        'метрика'                  => 'metrika',
        'misspel'                  => true,
        'moderator'                => true,
        'monetizacia'              => true,
        'monitoring'               => true,
        //
        'navigation'               => true,
        'nepot_filtr'              => true,
		'noindex'                  => true,
        //
        'оптимизация'              => 'optima',
        //
        'parseri'                  => true,
		'позиции-сайта'            => 'position',
        'partnerka'                => true,
        'pereadresaziya'           => true,
        'perelinkovka'             => true,
		'personalizatciya'         => true,
        'pesocniza'                => true,
        'pessimizazia'             => true,
        'plagiat'                  => true,
        'plotnost'                 => true,
		'poddomen'                 => true,
		'poiskovoe_prodvijenie'    => true,
        'poiskovaja_sistema'       => true,
		'poiskovii_zapros'         => true,
        'poseshaemosty'            => true,
		'povedencheskii_faktor'    => true,
        'page_rank'                => true,
		'prodaushii_text'          => true,
        'proxy'                    => true,
        'pramaja_ssilka'           => true,
        //
        'релевантность'            => 'relevantnost',
        'rangirovanie'             => true,
        'redirekt'                 => true,
		'regionalnost'             => true,
        'rezultati-poiska'         => true,
        'reklamnie_plosadki'       => true,
        'rerait'                   => true,
		'retargeting'              => true,
        'roboti'                   => true,
		'runet'                    => true,
		'rsya'                     => true,
        //
        'сниппет.html'             => 'snippet',
        'sdl'                      => true,
        'site'                      => true,
		'semanticheskoe_yadro'     => true,
		'seo_prodvizenie'          => true,
        'server'                   => true,
        'ctr'                      => true,
		'crm'                      => true,
        'skvoznie-ssilki'          => true,
        'skleyka'                  => true,
		'smo'                      => true,
        'spam'                     => true,
        'ssilka'                   => true,
		'ssilochnaya_massa'        => true,
		'ssilochnii_vzriv'         => true,
        'statistika'               => true,
		'stepen_otkazov'           => true,
		'stop_slova'               => true,
        'scetcik'                  => true,
		'srednechastotnii_zapros'  => true,
		'sapossilka'               => true,
        //
        'траст'                    => 'trust',
        'targeting'                => true,
        'tic'                      => true,
        'top'                      => true,
        'tocka_vhoda'              => true,
        'traffic'                  => true,
		'tizernaya_reklama'        => true,
        //
        'unik_posetitel'           => true,
        'url'                      => true,
		'yroven_vlojennosti'       => true,
        //
        'фильтры'                  => 'filtr',
        'freim'                    => true,
		'fishing'                   => true,
        //
        'hit'                      => true,
        'xleb'                     => true,
        'host'                     => true,
        'hosting'                  => true,
        //
        'zelevie_posetiteli'       => true,
        'cms'                      => true,
        //
        'chastotnost'              => true,
		'chpy'                     => true,
        //
        'sablon'                   => true,
        'sapka_saita'              => true,
        //
        'elektronnaja_kommercija'  => true,
        'elektronnaja_pocta'       => true,
        //
        'юзабилити'                => 'uzabiliti',
        //
        'javascript'               => true,
        'jazik_poiskzaprosov'      => true,

    );

    function getContentMap()
    {
        return self::$map;
    }

    function getBasicRount()
    {
        return 'wiki/index';
    }

    public static function contentMap()
    {
        return array_keys(self::prepareContentMap(self::$map));
    }
}