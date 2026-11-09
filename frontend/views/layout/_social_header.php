<?php
/**
 *
 */
$elementClassName = isset($elementClassName) ? $elementClassName : 'inside__social';
?>
<script src="/social-likes/social-likes.min.js"></script>
<div class="inside__header">
    <div class="social inside__social <?= $elementClassName ?>" data-counters="no">
        <div class="social-likes">
            <div class="facebook social__link social__link_light social__link_fb" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
            <div class="twitter social__link social__link_light social__link_tw" title="Поделиться ссылкой в Твиттере">Twitter</div>
            <div class="vkontakte social__link social__link_light social__link_vk" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
        </div>
    </div>
    <a href="../sitefree.html" class="inside__analyzer analyzerLink">
        <span class="analyzerLink__text">Получить новый сайт в подарок</span>
    </a>
</div>
