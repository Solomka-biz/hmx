<?php
/**
 *
 */
$pageTitle = isset($pageTitle) ? $pageTitle : '';
$title = isset($title) ? $title : $pageTitle;

if ($pageTitle) {
    $this->setHeadTitle($title . ".");
    $this->setHeadDescription($title . " - продвижение сайтов.");
    $this->setHeadKeywords(mb_strtolower($title));
}

?>
<div class="body__main inside">
    <div class="inside__inner">
        <div class="d-none d-md-block"><?= $this->renderPartial('//layout/_social_header') ?></div>

        <a class="inside__sectionTitle" href="<?= Yii::link()->wiki() ?>">Энциклопедия SEO</a>

        <h1 class="inside__pageTitle"><?= CHtml::encode($title) ?></h1>

        <div class="inside__wiki">
            <?= $content ?>
        </div>

        <?= $this->renderPartial('//layout/_social') ?>

        <hr class="divider">
        <h2 class="page__middleTitle">1 минутное видео <br>о продвижении сайтов</h2>
        <div class="page__team team">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aQzSu1p0IlQ?rel=0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
            </div>
        </div>

    </div>
</div>
