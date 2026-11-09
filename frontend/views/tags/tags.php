<?php
/**
 *
 */
$this->setHeadTitle('SEO термины - продвижение сайтов в Москве.');
$this->setHeadDescription('Основные термины используемые в интернет продвижении. Термины SEO - HMX.ru.');
$this->setHeadKeywords('термины интернет продвижения');

$wikiStructure = [

    'В' => [
		'vidreklami' => 'Вид рекламы',
    ],
    'И' => [
		'internetprodvijenie.html' => 'Интернет продвижение',
		'internetreklamasaita' => 'Интернет реклама сайта',
    ],
    'К' => [
		'kontekstnayareklama' => 'Контекстная реклама',
		'kontent_analiz' => 'Контент анализ',
		'konversiya' => 'Конверсия',
			
    ],
    'М' => [
		'marketingprodvigenie' => 'Маркетинг и продвижение',
		'metodi_prodvigeniya' => 'Методы продвижения',
		'metodi_reklami' => 'Методы рекламы',
    ],
    'О' => [
		'opredelenie_poziziy' => 'Определение позиций',
		'optimizaziya_saita' => 'Оптимизация сайта',
    ],
    'П' => [
		'poddergka_saita' => 'Поддержка сайта',
		'poiskovaya_internet_reklama' => 'Поисковая интернет реклама',
		'poiskovaya_optimizaziya' => 'Поисковая оптимизация',
		'poiskovaya_raskrutka' => 'Поисковая раскрутка',
		'poiskovaya_raskrutka_saita' => 'Поисковая раскрутка сайта',
		'poiskovayaraskrutka' => 'Раскрутка в поиске',
		'poiskovayareklama' => 'Поисковая реклама',
		'poiskovayareklamasaita' => 'Поисковая реклама сайта',
		'poiskovoeprodvigenie' => 'Поисковое продвижение',
		'poiskovoeprodvigeniesaita' => 'Поисковое продвижение сайта',
		'pozizii_saita' => 'Позиции сайта',
		'prodaga_reklami' => 'Продажа рекламы',
		'prodvigenie_optimizaziya' => 'Продвижение и оптимизация',
		'prodvigenie_saita_marketing' => 'Продвижение сайта и маркетинг',
		'prodvigeniesaitavinternete' => 'Продвижение сайта в Интернете',
    ],
    'Р' => [
		'raskrutka_optimizazia' => 'Раскрутка и оптимизация',
		'razmesheniereklami' => 'Размещение рекламы',
		'reclamavinternete' => 'Реклама в Интернете',
		'reklama' => 'Реклама',
		'reklamaiprodvigenie' => 'Реклама и продвижение',
		'reklamaonline' => 'Реклама онлайн',
		'reklamavrossii' => 'Реклама в России',
    ],
    'С' => [
		'semanticheskoye_yadro' => 'Семантическое ядро',
		'seo' => 'SEO',
		'seo_optimizaziya' => 'СЕО оптимизация',
		'sozdanieinternetreklami' => 'Создание интернет рекламы',
		'sozdanieiprodvigeniesaitov' => 'Создание и продвижение сайтов',
		'stoimostreklami' => 'Стоимость рекламы',
    ],
    'Э' => [
        'effectivnostreklami.html' => 'Эффективность рекламы',
		'effektivnaya_reklama.html' => 'Эффективная реклама',
    ],
];
?>
<div class="body__main inside">
    <div class="inside__inner">
        <h1 class="inside__title">Термины и теги</h1>

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