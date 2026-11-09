<?php
/**
 * @var $this    TagsController
 * @var $content string
 */
?>
<div class="body__main inside">
    <div class="inside__inner">
        <div class="d-none d-md-block"><?= $this->renderPartial('//layout/_social_header') ?></div>
        <a class="inside__sectionTitle" href="<?= Yii::link()->tags() ?>">Термины</a>
        <div class="inside__tags">
            <?= $this->renderPartial('//tags/content/' . $content, array()); ?>
        </div>
        <?= $this->renderPartial('//layout/_social') ?>
    </div>
</div>
