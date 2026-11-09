<?php
/**
 * @var $this       SiteController
 * @var $report     AnalizeReport
 */

//return false;
?>
<div class="grade certificate__bodyItem">


    <?php $this->renderPartial(
        '_gradeProgress',
        [
            'title'  => '4. Внешние факторы',
            'rating' => $report->getExternalRating()
        ]
    ); ?>

    <div class="grade__note">

        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => ' Ссылки на сайт',
                'value'  => $report->siteLinksYahoo,
                'url'    => $report->siteLinksYahooLink,
                'result' => $report->getSiteLinksCountResult($report->siteLinksYahoo)
            ]
        ); ?>



    </div>

    <div class="grade__note">


        <p class="grade__noteText">
            Важнейшим инструментом продвижения сайта в поисковых системах является наращивание внешних ссылок с хороших,
            качественных сайтов.
        </p>

        <p class="grade__noteText">

            Уделите пристальное внимание спискам ссылок. Увеличение этих списков и их тщательный анализ позволят Вам
            добиться высоких показателей в оптимизации сайтов.
        </p>
    </div>
</div>
