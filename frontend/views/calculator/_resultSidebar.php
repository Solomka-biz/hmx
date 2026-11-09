<?php
/**
 * @var $pageData CalculatorResultPageData
 * @var $form     CalculatorForm
 */
?>
<div style="text-align: center; width:350px;"
     class="hints b-calculatorForm i-bem"
     onclick="return { 'b-calculatorForm': {'uniqId': 'b-calculatorForm'}};">
    <div style="margin:0 0 20px; padding:5px 0 0; 0font-weight:bold; font-size:20px; color:#739ab7">
        Подсказки:
    </div>
    <div id="hint_box"
         style="width:350px; padding:7px 0;background-color:white; border:1px solid #cbcbcb ;text-align:left; clear: both;">
        <?php foreach ($pageData->hints as $keyword) { ?>
            <div class="b-calculatorForm__hintRow">

                        <span class="b-calculatorForm__addHintButton"
                              onclick="return { 'keyword': <?= CJavaScript::encode($keyword->getPhrase()) ?>};">
                            <span><img src="/images/calculator/l-arrow.png"></span>
                            <span class="b-calculatorForm__addButtonTitle">
                                <?= CHtml::encode($keyword->getPhrase()) ?>
                            </span>
                        </span>
                        <span> -
                            <?php if ($keyword->getPrice() < 0) { ?>
                                <span title="Слово слишком конкурентно">дорого</span>
                            <?php } else { ?>
                                <?= $keyword->getPrice() ?> руб.
                            <?php } ?>

                        </span>
                        <span class="b-calculatorForm__ignoreHintButton" onclick="return {
                            'keyword': <?= CJavaScript::encode($keyword->getPhrase()) ?>
                            };">
                            <img src="/images/calculator/delete.png" title="скрыть">
                        </span>
            </div>
        <?php } ?>
    </div>
</div>
