<?php
/**
 * @var $this         SiteController
 * @var $selectedItem string
 */
$selectedItem = isset($selectedItem) ? $selectedItem : null;
$menuItems = [

    UrlManager::SITE_ACTION_PRICES      => [
        \Yii::link()->site(UrlManager::SITE_ACTION_PRICES),
        'Сроки и цены',
        false
    ],
	    UrlManager::SITE_ACTION_ABOUT      => [
        \Yii::link()->site(UrlManager::SITE_ACTION_ABOUT),
        'О компании',
        false
    ],
    UrlManager::SITE_ACTION_ORDER   => [
        \Yii::link()->order(UrlManager::SITE_ACTION_ORDER),
        'Заказать личный бренд',
        false
    ],
];
$showMainItem = false;
if ($selectedItem) {
    $showMainItem = true;
}
?>
<?/*
<h2 class="main__bottomTitle"></h2>
*/?>
<ul class="footer__navi">

    <?php if ($showMainItem) { ?>
        <li><a href="<?= Yii::link()->site() ?>"
               rel="nofollow"
            >Как мы работаем</a>
        </li>
    <?php } ?>

    <?php foreach ($menuItems as $itemKey => $item) { ?>
        <?php if ($itemKey !== $selectedItem) { ?>
            <li><a href="<?= $item[0] ?>" rel="nofollow"><?= $item[1] ?></a></li>
        <?php } ?>
    <?php } ?>
</ul>
