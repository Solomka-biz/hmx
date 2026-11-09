<?php
/**
 * @var $title  string
 * @var $rating
 */

$ratingValue = isset($rating) ? intval($rating) : 0;

$icons = [
    0  => 'bad',
    20 => 'normal',
    50 => 'well',
    80 => 'excellent',
];
$iconResult = null;
foreach ($icons as $iconValue => $iconClass) {
    if ($ratingValue >= $iconValue) {
        $iconResult = $iconClass;
    }
}
?>

    <div class="grade__title"><?= CHtml::encode($title) ?></div>

<?php if ($rating !== null) { ?>
    <div class="grade__body">

        <div class="grade__progress grade__progress_<?= $iconResult ?>"
             style="width: <?= $ratingValue ?>%"></div>
        <div class="grade__value"><?= $ratingValue ?>%</div>
    </div>
<?php } ?>