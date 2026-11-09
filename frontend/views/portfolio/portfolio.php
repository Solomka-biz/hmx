<?php
/**
 *
 * @var $allYears
 * @var $year
 */


$this->setHeadTitle('Портфолио раскрутки сайтов ' . $year . ' год.  Примеры раскрутки - HMX.ru');
$this->setHeadDescription(
    'Пример раскрутки сайта. Портфолио раскрутки сайта - примеры позиций новых клиентов компании.'
);
$this->setHeadKeywords(
    'портфолио раскрутки,портфолио раскрутки сайта,портфолио раскрутки сайтов,пример раскрутки,пример раскрутки сайта,пример раскрутки сайтов'
);
?>
<link rel="canonical" href="https://www.hmx.ru/portfolio.html"/>
<div class="body__main inside">
    <div class="inside__inner">

        <div class="inside__site">


            <?php $yearsMenu = $this->beginWidget('CClipWidget'); ?>
            <center>
                <b>Выберите год:</b>
                <?php foreach ($allYears as $item) { ?>
                    <?php if ($item == $year) { ?>
                        <strong><?= CHtml::encode($item) ?></strong>
                    <?php } else { ?>
                        <a  href="<?= Yii::link()->portfolio($item) ?>"><?= CHtml::encode($item) ?></a>
                    <?php } ?>
                <?php } ?>
            </center>
            <?php $this->endWidget($yearsMenu->id); ?>


            <?= $this->clips->itemAt($yearsMenu->id) ?>

            <?= $this->renderPartial('//portfolio/years/p' . $year, array()); ?>

            <br/><br/>

            <?= $this->clips->itemAt($yearsMenu->id) ?>

            <br/>

            <p>
				В портфолио указаны лучшие достигнутые позиции в процессе <a href="https://www.hmx.ru">раскрутки сайтов</a>. Некоторые
                позиции могут отличаться от нынешних, поскольку не со всеми клиентами из портфолио мы
                работаем в настоящее время.
            </p>

        </div>

    </div>
</div>
