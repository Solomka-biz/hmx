<?php
/**
 * @var $this       SiteController
 * @var $report     AnalizeReport
 */
?>
<div class="grade certificate__bodyItem">

    <?php $this->renderPartial(
        '_gradeProgress',
        [
            'title'  => '1. Присутствие в поисковых системах',
            'rating' => $report->getSearchEnginesRating()
        ]
    ); ?>


    <div class="grade__note">

        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Яндекс. ТИЦ',
                'value'  => $report->yandexTIC,
                'url'    => $report->yandexTICLink,
                'result' => $report->getYandexTICResult()
            ]
        ); ?>
        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Страниц в Яндексе',
                'value'  => $report->yandexPages,
                'url'    => $report->yandexPagesLink,
                'result' => $report->getYandexPagesResult(),
            ]
        ); ?>

        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Страниц в Google',
                'value'  => $report->googlePages,
                'url'    => $report->googlePagesLink,
                'result' => $report->getGooglePagesResult()
            ]
        ); ?>

        <p class="grade__noteText">
            Сайты с большим количеством страниц, с уникальным содержанием, чаще встречаются в топах поисковых систем и
            дольше там удерживаются. "Маленькие" сайты более зависимы от присутствия внешних ссылок на сайт и этим
            проигрывают своим "крупным" конкурентам.
        </p>

        <p class="grade__noteText">
            Для того, чтобы поисковые системы проиндексировали все важное содержимое сайта, очень полезен будет
            инструмент SiteMap, поддерживаемый всеми крупными поисковыми системами.
        </p>
    </div>
</div>