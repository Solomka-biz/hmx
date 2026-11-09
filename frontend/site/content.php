<?php
/**
 * @var $this    SiteController
 * @var $content string
 */
?>
<div class="body__main inside">
    <div class="inside__inner">
    <?= $this->renderPartial('//layout/_social_header') ?>
        <div class="inside__site">
            <?= $this->renderPartial('//site/content/' . $content, array()); ?>
        </div>
        <?= $this->renderPartial('//layout/_social') ?>
    </div>
</div>