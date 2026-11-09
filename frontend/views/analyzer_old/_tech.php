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
            'title'  => '3. Технические характеристики',
            'rating' => $report->getTechRating()
        ]
    ); ?>

    <div class="grade__note">
        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Внешние ссылки с главной',
                'value'  => $report->externalLinksCount,
                'result' => $report->getNoindexResult()
            ]
        ); ?>

        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Внутренние ссылки',
                'value'  => $report->internalLinksCount,
                'result' => $report->getInternalLinksCountResult()
            ]
        ); ?>



        <p class="grade__noteText">
            Тег noindex используется только в поисковой системе Яндекс, при этом это не дает гарантий, что Яндекс не
            будет индексировать размещенные в этих тегах фрагменты кода и тексты. Хороший способ закрыть внешние ссылки
            от индексации это организовать переходы по ним с помощью переадресации.
        </p>

        <p class="grade__noteText">
            Не стоит указывать во внешних ссылках фразы совпадающие с фразами из Title. Этим Вы указываете поисковым
            системам, что не эта страничка самая главная по этому запросу на вашем сайте. При этом желательно чтобы на
            эту страничку вели ссылки с других страничек вашего сайта по указанным в Title ключевым фразам.
        </p>
    </div>
</div>
