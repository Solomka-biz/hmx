<?php
/**
 *
 */
$this->setHeadTitle('Термины личного бренда. Слова используемые в личном брендинге');
$this->setHeadDescription('Основные понятия используемые в персональном брендинге. Энциклопедия терминов личного бренда - HMX.ru.');
$this->setHeadKeywords('энциклопедия личного бренда');

$wikiStructure = [

    'А' => [
        'avtorisazia.html'          => 'Авторизация',
        'ags.html'                  => 'АГС',
		\Yii::link()->wiki('alias') => 'Алиас',
		'alt.html'                  => 'Альт',
        \Yii::link()->wiki('ancor') => 'Анкор',
        \Yii::link()->wiki('up')    => 'Апдейт',
		'aps.html'                  => 'АПС',
        'arhitektura_saita.html'    => 'Архитектура сайта',
		'audit_saita.html'          => 'Аудит сайта',
    ],
    'Б' => [
        \Yii::link()->wiki('ban') => 'Бан',
		'bannernaya_reklama.html' => 'Баннерная реклама',
		'belaya_optimizaciya.html' => 'Белые методы поисковой оптимизации',
		'b2b.html'                 => 'Б2Б (B2B)',
		'birga_ssilok.html'       => 'Биржа ссылок',
		'birga_statei.html'       => 'Биржа статей',
        'brauzer.html'            => 'Браузер',
        'bistrorobot.html'        => 'Быстроробот',
        'budjet_reklamnyj.html'   => 'Бюджет (рекламный)',
    ],
    'В' => [
        'validnost.html'              => 'Валидность',
		'verefikaciya.html'           => 'Верификация',
        \Yii::link()->wiki('verstka') => 'Верстка',
		'vechnaya_ssilka.html'        => 'Вечная ссылка',
		'vidimost_saita.html'         => 'Видимость сайта',
		'vneshnie_ssilki.html'        => 'Внешние ссылки',
		'vnutrennyaya_optimizatciya.html'  => 'Внутренняя оптимизация',
        'vidacha.html'                => 'Выдача (поисковая)',
    ],
    'Г' => [
        'garantii_v_prodvisenii.html' => 'Гарантии (в продвижении)',
        'geo.html'                    => 'Геозависимость',
		'home.html'                    => 'Главная страница',
    ],
    'Д' => [
        'demograficeski_targeting.html' => 'Демографический таргетинг',
        \Yii::link()->wiki('domen')     => 'Домен',
        'dorvei.html'                   => 'Дорвеи',
        'dubli.html'                    => 'Дубли',
    ],
    'Е' => [
        'estestvennie_ssilki.html' => 'Естественные ссылки',
    ],
    'Ж' => [
        'girnaja_ssilka.html' => 'Жирная ссылка',
    ],
    'З' => [
        \Yii::link()->wiki('zapros') => 'Запрос',
		'zamorozka_ssilok.html'      => 'Заморозка ссылок',
        'zerkalo.html'               => 'Зеркало (копия сайта)',
    ],
    'И' => [
        'invite.html'                     => 'Инвайт (приглашение)',
        'indeks.html'                     => 'Индекс',
        \Yii::link()->wiki('indeksaziya') => 'Индексация',
		'internet_marketing.html'         => 'Интернет-маркетинг',
		'internet_reklama.html'           => 'Интернет-реклама',
    ],
    'К' => [
        'captcha.html'                  => 'Капча',
		'karta-saita.html'                  => 'Карта сайта',
        'katalog.html'                  => 'Каталог',
        'click.html'                    => 'Клик',
        'cloaking.html'                 => 'Клоакинг',
        'keys.html'                     => 'Ключевые слова',
        \Yii::link()->wiki('konversia') => 'Конверсия',
        \Yii::link()->wiki('content')   => 'Контент',
        'kornevaja-directoria.html'     => 'Корневая директория',
	   'kopiraiting.html'               => 'Копирайтинг',
		'kross_posting.html'            => 'Кросс-постинг',
        'cookies.html'                  => 'Куки (cookies)',
        'kesh.html'                     => 'Кэш',
    ],
    'Л' => [
	    'lending.html'           => 'Лендинг',
        'linkopomoika.html' => 'Линкопомойка',
        'logotip.html'      => 'Логотип',
        'login.html'        => 'Логин',
    ],
    'М' => [
	    'mediinaya_reklama.html'      => 'Медийная реклама',
		'mediino_kontextnaya_reklama.html' => 'Медийно-контекстная реклама',
        'metategi.html'               => 'Мета теги',
        \Yii::link()->wiki('metrika') => 'Метрика',
        'misspel.html'                => 'Мисспел',
        'moderator.html'              => 'Модератор',
        'monetizacia.html'            => 'Монетизация',
        'monitoring.html'             => 'Мониторинг',
    ],
    'Н' => [
        'navigation.html'  => 'Навигация',
        'nepot_filtr.html' => 'Непот-фильтр',
		'noindex.html'     => 'Ноиндекс',
    ],
    'О' => [
        \Yii::link()->wiki('optima') => 'Оптимизация',
    ],
    'П' => [
	    'parseri.html'                 => 'Парсеры',
        'partnerka.html'               => 'Партнерская программа',
        'pereadresaziya.html'          => 'Переадресация',
        'perelinkovka.html'            => 'Перелинковка',
		'personalizatciya.html'        => 'Персонализация',
        'pesocniza.html'               => 'Песочница (фильтр Гугла)',
        'pessimizazia.html'            => 'Пессимизация',
        'plagiat.html'                 => 'Плагиат',
        'plotnost.html'                => 'Плотность ключевых слов',
		'povedencheskii_faktor.html'   => 'Поведенческий фактор',
		'poddomen.html'                => 'Поддомен',
        \Yii::link()->wiki('position') => 'Позиции сайта',
		'poiskovoe_prodvijenie.html'   => 'Поисковое продвижение',
        'poiskovaja_sistema.html'      => 'Поисковая система',
		'poiskovii_zapros.html'        => 'Поисковый запрос',
        'poseshaemosty.html'           => 'Посещаемость',
        'page_rank.html'               => 'ПР (Page Rank)',
		'prodaushii_text.html'         => 'Продающий текст',
        'proxy.html'                   => 'Прокси',
        'pramaja_ssilka.html'          => 'Прямая ссылка',
    ],
    'Р' => [
        'rangirovanie.html'                => 'Ранжирование',
        'redirekt.html'                    => 'Редирект',
		'regionalnost.html'                => 'Региональность',
        'rezultati-poiska.html'            => 'Результаты поиска (SERP)',
        'reklamnie_plosadki.html'          => 'Рекламные площадки',
        \Yii::link()->wiki('relevantnost') => 'Релевантность',
        'rerait.html'                      => 'Рерайт',
		'retargeting.html'                 => 'Ретаргетинг',
        'roboti.html'                      => 'Робот',
		'runet.html'                       => 'Рунет',
		'rsya.html'                        => 'РСЯ',
    ],
    'С' => [
	    'site.html'             => 'Сайт',
	    'sapossilka.html'             => 'Сапоссылка',
        'sdl.html'                    => 'СДЛ',
		'semanticheskoe_yadro.html'   => 'Семантическое ядро',
		'seo_prodvizenie.html'        => 'СЕО',
        'server.html'                 => 'Сервер',
        'ctr.html'                    => 'Си Ти Ар',
        'skvoznie-ssilki.html'        => 'Сквозные ссылки',
        'skleyka.html'                => 'Склейка доменов',
		'smo.html'                    => 'СМО (SMO)',
        \Yii::link()->wiki('snippet') => 'Сниппет',
        'spam.html'                   => 'СПАМ (поисковый)',
		'crm.html'                    => 'CRM',
        'ssilka.html'                 => 'Ссылка',
		'ssilochnaya_massa.html'      => 'Ссылочная масса',
		'ssilochnii_vzriv.html'      => 'Ссылочный взрыв',
        'statistika.html'             => 'Статистика',
		'stepen_otkazov.html'         => 'Степень отказов',
		'stop_slova.html'             => 'Стоп-слова',
        'scetcik.html'                => 'Счетчик',
		'srednechastotnii_zapros.html' => 'Среднечастотный запрос',
    ],
    'Т' => [
        'targeting.html'            => 'Таргетинг',
		'tizernaya_reklama.html'    => 'Тизерная реклама',
        'tic.html'                  => 'тИЦ',
        'top.html'                  => 'Топ',
        'tocka_vhoda.html'          => 'Точка входа',
        \Yii::link()->wiki('trust') => 'Траст',
        'traffic.html'              => 'Траффик',
    ],
    'У' => [
        'unik_posetitel.html' => 'Уникальный посетитель',
        'url.html'            => 'Урл',
		'yroven_vlojennosti.html'     => 'Уровень вложенности',
    ],
    'Ф' => [
        \Yii::link()->wiki('filtr') => 'Фильтры',
		'fishing.html'              => 'Фишинг',
        'freim.html'                => 'Фрейм',
    ],
    'Х' => [
        'hit.html'     => 'Хит (статистика)',
        'xleb.html'    => 'Хлебные крошки',
        'host.html'    => 'Хост (статистика)',
        'hosting.html' => 'Хостинг',
    ],
    'Ц' => [
        'zelevie_posetiteli.html' => 'Целевые посетители',
        'cms.html'                => 'ЦМС (CMS)',
    ],
    'Ч' => [
        'chastotnost.html' => 'Частотность',
		'chpy.html'        => 'ЧПУ',
    ],
    'Ш' => [
        'sablon.html'      => 'Шаблон',
        'sapka_saita.html' => 'Шапка сайта',
    ],
    'Э' => [
        'elektronnaja_kommercija.html' => 'Электронная коммерция',
        'elektronnaja_pocta.html'      => 'Электронная почта',
    ],
    'Ю' => [
        \Yii::link()->wiki('uzabiliti') => 'Юзабилити',
    ],
    'Я' => [
        'javascript.html'          => 'Яваскрипт (JavaScript)',
        'jazik_poiskzaprosov.html' => 'Язык поисковых запросов',
    ],
];
?>
<div class="body__main inside">
    <div class="inside__inner">
        <h1 class="inside__title">Личный брендинг и SEO</h1>

        <div class="glossary row">
            <div class="glossary__col col-md-6">
                <?php $index = 0;
                $lettersNum = count($wikiStructure); ?>
                <?php foreach ($wikiStructure as $letter => $items) { ?>
                    <?php $index++; ?>
                    <div class="glossary__item">
                        <div class="glossary__itemLetter"><?= $letter ?></div>
                        <div class="glossary__itemTerms">
                            <?php foreach ($items as $url => $title) { ?>
                                <a href="<?= $url ?>" class="glossary__itemTermsItem"><?= $title ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($index == 14) { ?>
            </div>

            <div class="glossary__col col-md-6">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?= $this->renderPartial('//layout/_social') ?>
    </div>
</div>
