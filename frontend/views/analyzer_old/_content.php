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
            'title'  => '2. Контент',
            'rating' => $report->getContentRating()
        ]
    ); ?>

    <div class="grade__note">
        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Символов в заголовке (title)',
                'value'  => $report->titleLength,
                'result' => $report->getTitleLengthResult()
            ]
        ); ?>

        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Ключевых слов в заголовке',
                'value'  => $report->keyPhrasesInTitleCount,
                'result' => $report->getKeyPhrasesInTitleCountResult()
            ]
        ); ?>

        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Ключевые слова в описании',
                'value'  => $report->keyPhrasesInDescriptionCount,
                'result' => $report->getKeywordsInDescriptionCountResult()
            ]
        ); ?>
        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Ключевые слова в тексте',
                'value'  => $report->keyPhrasesInTextCount,
                'result' => $report->getKeywordsInTextCountResult()
            ]
        ); ?>

        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Ключевые слова в описании картинок',
                'value'  => $report->keyPhrasesInImgAltCount,
                'result' => $report->getKeywordsInImgCountResult()
            ]
        ); ?>
        
        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Ключевые слова в теге H1',
                'value'  => $report->keyPhrasesInH1Count,
                'result' => $report->getKeywordsInH1CountResult()
            ]
        ); ?>
        <?php $this->renderPartial(
            '_gradeItem',
            [
                'title'  => 'Ключевые слова в тегах H2-H6',
                'value'  => $report->keyPhrasesInOtherHCount,
                'result' => $report->getKeywordsInHOtherCountResult()
            ]
        ); ?>


        <p class="grade__noteText">
            В заголовке сайта должны присутствовать те слова, по которым Вы хотите, чтобы Ваш сайт находили в поисковых
            системах. Присутствие этих слов в заголовке играет ключевую роль!
        </p>

        <p class="grade__noteText">
            Поисковые системы негативно относятся к повторяющимся заголовкам на разных страницах Вашего сайта. Каждый
            заголовок, для каждой страницы, должен быть уникальным.
        </p>

        <p class="grade__noteText">
            Важно, чтобы в контенте сайта присутствовали ключевые слова из заголовка. Можно использовать эти слова с
            другими окончаниями. Но, важно знать, что слишком большое повторение одинаковых слов и фраз в тексте может
            привести к санкциям со стороны поисковых систем.
        </p>
    </div>
</div>
