<?php
/**
 * @var $title  string
 * @var $value  string
 * @var $url    string
 * @var $result array
 */
$display = isset($display) ? (bool)$display : true;
if (!$display) {
    return;
}
$url = isset($url) ? $url : null;

$icon = isset($result[0]) ? $result[0] : AnalizeReport::ICON_BAD;
$description = isset($result[1]) ? $result[1] : '';
?>
<div class="grade__noteItem grade__noteItem_<?= $icon ?>">
    <?= CHtml::encode($title) ?>:
    <?php if ($value !== null) { ?>
        <?php if ($url) { ?>
            <a href="<?= $url ?>" class="grade__noteValueLink" target="_blank"><?= CHtml::encode($value) ?></a>.
        <?php } else { ?>
            <span class="grade__noteValue"><?= CHtml::encode($value) ?></span>.
        <?php } ?>
    <?php } ?>
    <span class="grade__noteItemDescr"><?= CHtml::encode($description) ?></span>
</div>