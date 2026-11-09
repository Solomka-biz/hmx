<?php
/**
 * @var $this       SiteController
 * @var $report     AnalizeReport
 */

$this->setHeadTitle('Поисковый рейтинг сайта ' . CHtml::encode($report->getSiteName()) . '.');
$this->setHeadDescription(
    $report->siteTitle
    . ' SEO анализ сайта ' . CHtml::encode($report->getSiteName()) . ' от ХостМакс.'
);
$this->setHeadKeywords(CHtml::encode($report->getSiteName()));

$allowSharing = false;
?>
<div class="body__main inside">
    <div class="inside__certificate <?= (!$allowSharing ? 'inside__certificate_nosharing' : '') ?> certificate">
        <div class="certificate__site"><?= CHtml::encode($report->getSiteName()) ?></div>
        <?php if ($allowSharing) { ?>

            <h1 class="certificate__title">Поисковый рейтинг сайта</h1>
        <?php } ?>

        <div class="certificate__head">

            <?php if ($allowSharing) { ?>
                <div class="certificate__headSocial">

                    <?=
                    $this->renderPartial(
                        '//layout/_social',
                        ['elementClassName' => 'certificate__headSocialBlock']
                    ) ?>
                </div>

            <?php } else { ?>
                <div class="certificate__headTitle">

                    <h1 class="certificate__title certificate__title_mode_inline">Поисковый рейтинг</h1>
                </div>

            <?php } ?>


            <?php
            $totalRating = $report->getTotalRating();

            $starModes = [
                0  => 'bad',
                20 => 'normal',
                50 => 'well',
                80 => 'excellent',
            ];
            $starModeResult = null;
            foreach ($starModes as $value => $class) {
                if ($totalRating[0] >= $value) {
                    $starModeResult = $class;
                }
            }

            ?>
            <div class="siteRate siteRate_grade_<?= $starModeResult ?> certificate__headRate">
                <div class="siteRate__text">
                    <span class="siteRate__value"><?= $totalRating[0] ?></span>%
                </div>
            </div>

            <div class="certificate__headNote">
                <div class="certificate__headNoteText"><?= $totalRating[1] ?></div>
            </div>
        </div>

        <div class="certificate__body">

            <?= $this->renderPartial('_searchEngines', ['report' => $report]) ?>

            <?= $this->renderPartial('_content', ['report' => $report]) ?>

            <?= $this->renderPartial('_tech', ['report' => $report]) ?>

            <?= $this->renderPartial('_external', ['report' => $report]) ?>

        </div>

        <?php if ($allowSharing) { ?>
            <div class="certificate__footer">


                <div href="/" class="certificate__footerLink">
                    <div href="/" class="certificate__footerLinkTitle">Постоянный адрес страницы</div>
                    <div class="sertificate__footerLinkVal">https://www.hmx.ru/</div>
                </div>

                <?= $this->renderPartial('//layout/_social', ['elementClassName' => 'certificate__footerSocial']) ?>
            </div>
        <?php } ?>

    </div>


    <div class="inside__bottom">

        <?= $this->renderPartial(
            '//layout/_feedback',
            [
                'question_about' => 'по раскрутке вашего сайта ' . CHtml::encode($report->getSiteName()),
                'from_text'      => 'Заказ из анализатора, отправлен после анализа сайта: ' . CHtml::encode($report->getSiteName()),
                'reach_goal'     => 'ORDERANALIZ',
            ]
        ) ?>


        <?= $this->renderPartial('//layout/_mainNav') ?>

    </div>
</div>
