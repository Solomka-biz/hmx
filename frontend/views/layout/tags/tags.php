<?php
/**
 *
 */
$this->setHeadTitle('Энциклопедия интернет рекламы.');
$this->setHeadDescription('Основные понятия используемые в интернет рекламе. Энциклопедия рекламы - HMX.ru.');
$this->setHeadKeywords('энциклопедия интернет рекламы');

$wikiStructure = [

    'А' => [
        'avtorisazia.html'          => 'Авторизация',
        'ags.html'                  => 'АГС',
        \Yii::link()->wiki('ancor') => 'Анкор',
        \Yii::link()->wiki('up')    => 'Апдейт',
        'arhitektura_saita.html'    => 'Архитектура сайта',
    ],
    'Б' => [
        \Yii::link()->wiki('ban') => 'Бан',
        'brauzer.html'            => 'Браузер',
        'bistrorobot.html'        => 'Быстроробот',
        'budjet_reklamnyj.html'   => 'Бюджет (рекламный)',
    ],
    'В' => [
        'validnost.html'              => 'Валидность',
        \Yii::link()->wiki('verstka') => 'Верстка',
        'vidacha.html'                => 'Выдача (поисковая)',
    ],
    'Г' => [
        'garantii_v_prodvisenii.html' => 'Гарантии (в продвижении)',
        'geo.html'                    => 'Геозависимость',
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
        'zerkalo.html'               => 'Зеркало (копия сайта)',
    ],
    'И' => [
        'invite.html'                     => 'Инвайт (приглашение)',
        'indeks.html'                     => 'Индекс',
        \Yii::link()->wiki('indeksaziya') => 'Индексация',
    ],
    'К' => [
        'captcha.html'                  => 'Капча',
        'katalog.html'                  => 'Каталог',
		'karta-saita.html'           => 'Карта сайта',
        'click.html'                    => 'Клик',
        'cloaking.html'                 => 'Клоакинг',
        'keys.html'                     => 'Ключевые слова',
        \Yii::link()->wiki('konversia') => 'Конверсия',
        \Yii::link()->wiki('content')   => 'Контент',
        'kornevaja-directoria.html'     => 'Корневая директория',
        'cookies.html'                  => 'Куки (cookies)',
        'kesh.html'                     => 'Кэш',
    ],
    'Л' => [
        'linkopomoika.html' => 'Линкопомойка',
        'logotip.html'      => 'Логотип',
        'login.html'        => 'Логин',
    ],
    'М' => [
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
    ],
    'О' => [
        \Yii::link()->wiki('optima') => 'Оптимизация',
    ],
    'П' => [
        'partnerka.html'               => 'Партнерская программа',
        'pereadresaziya.html'          => 'Переадресация',
        'perelinkovka.html'            => 'Перелинковка',
        'pesocniza.html'               => 'Песочница (фильтр Гугла)',
        'pessimizazia.html'            => 'Пессимизация',
        'plagiat.html'                 => 'Плагиат',
        'plotnost.html'                => 'Плотность ключевых слов',
        \Yii::link()->wiki('position') => 'Позиции сайта',
        'poiskovaja_sistema.html'      => 'Поисковая система',
        'poseshaemosty.html'           => 'Посещаемость',
        'page_rank.html'               => 'ПР (Page Rank)',
        'proxy.html'                   => 'Прокси',
        'pramaja_ssilka.html'          => 'Прямая ссылка',
    ],
    'Р' => [
        'rangirovanie.html'                => 'Ранжирование',
        'redirekt.html'                    => 'Редирект',
        'rezultati-poiska.html'            => 'Результаты поиска (SERP)',
        'reklamnie_plosadki.html'          => 'Рекламные площадки',
        \Yii::link()->wiki('relevantnost') => 'Релевантность',
        'rerait.html'                      => 'Рерайт',
        'roboti.html'                      => 'Робот',
    ],
    'С' => [
        'sdl.html'                    => 'СДЛ',
        'server.html'                 => 'Сервер',
        'ctr.html'                    => 'Си Ти Ар',
        'skvoznie-ssilki.html'        => 'Сквозные ссылки',
        'skleyka.html'                => 'Склейка доменов',
        \Yii::link()->wiki('snippet') => 'Сниппет',
        'spam.html'                   => 'СПАМ (поисковый)',
        'ssilka.html'                 => 'Ссылка',
        'statistika.html'             => 'Статистика',
        'scetcik.html'                => 'Счетчик',
    ],
    'Т' => [
        'targeting.html'            => 'Таргетинг',
        'tic.html'                  => 'тИЦ',
        'top.html'                  => 'Топ',
        'tocka_vhoda.html'          => 'Точка входа',
        \Yii::link()->wiki('trust') => 'Траст',
        'traffic.html'              => 'Траффик',
    ],
    'У' => [
        'unik_posetitel.html' => 'Уникальный посетитель',
        'url.html'            => 'Урл',
    ],
    'Ф' => [
        \Yii::link()->wiki('filtr') => 'Фильтры',
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
        <h1 class="inside__title">Энциклопедия SEO</h1>

        <div class="glossary">
            <div class="glossary__col">
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

            <div class="glossary__col">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?= $this->renderPartial('//layout/_social') ?>
    </div>
</div>
