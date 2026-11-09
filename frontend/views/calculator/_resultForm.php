<?php
/**
 * @var $pageData CalculatorResultPageData
 * @var $form     CalculatorForm
 */
?>
<form action="<?= \Yii::link()->calculator(UrlManager::CALCULATOR_ACTION_PROCESS) ?>"
      method="post"
      class="b-calculatorForm b-calculatorForm__form i-bem"
      onclick="return { 'b-calculatorForm': {'uniqId': 'b-calculatorForm'}};">

    <input type="hidden" name="scenario" value="<?= CalculatorForm::SCENARIO_UPDATE ?>"/>

    <input type="hidden"
           name="request[keywords]"
           value="<?= CHtml::encode(join(', ', $form->keywords)) ?>"/>

    <input type="hidden"
           class="b-calculatorForm__removeKeywordsField"
           name="request[removeKeywords]"/>


    <input type="hidden"
           name="request[hintwords]"
           value="<?= CHtml::encode(join(', ', $form->hintwords)) ?>"/>

    <input type="hidden"
           class="b-calculatorForm__addHintwordsField"
           name="request[addHintwords]"/>

    <input type="hidden"
           class="b-calculatorForm__removeHintwordsField"
           name="request[removeHintwords]"/>

    <input type="hidden"
           name="request[ignoredHintwords]"
           class="b-calculatorForm__ignoredHintwordsField"
           value="<?= CHtml::encode(join(', ', $form->ignoredHintwords)) ?>"/>


    <input type="hidden" name="request[url]" value="<?= CHtml::encode($form->url) ?>"/>
    <input type="hidden" name="request[phone]" value="<?= CHtml::encode($form->phone) ?>"/>

    <div class="b-calculatorForm__exportBlock clearfix">
        <div class="b-calculatorForm__exportRow">

            <button name="viewType" value="print" class="b-calculatorForm__printButton" title="Для печати"
                ><img src="/images/calculator/print.gif"/></button>

            <!--
            <button name="viewType" value="word" class="b-calculatorForm__printButton" title="Экспортировать в Word"
                ><img src="/images/calculator/word.gif"></button>

            <button name="action" value="excel" class="b-calculatorForm__printButton" title="Экспортировать в Excel"
                ><img src="/images/calculator/excel.gif"></button>
                -->
        </div>
    </div>
    <table class="b-calculatorTable b-calculatorTable__table">
        <thead>
        <tr>
            <th>Ключевые слова:</th>
            <th>Стоимость продвижения:</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($pageData->keywords as $keyword) { ?>
            <tr>
                <td>
                    <div>
                        <span title="редактировать"><?= CHtml::encode($keyword->getPhrase()) ?></span>
                        <span class="b-calculatorForm__editButton" onclick="return {
                            'keyword': <?= CJavaScript::encode($keyword->getPhrase()) ?>
                            };">
                            <img src="/images/calculator/edit.png" title="редактировать">
                        </span>
                        <span class="b-calculatorForm__deleteButton" onclick="return {
                            'keyword': <?= CJavaScript::encode($keyword->getPhrase()) ?>
                            };">
                            <img src="/images/calculator/delete.png" title="удалить">
                        </span>
                    </div>
                </td>
                <td>
                    <div style="text-align:right">
                        <?php if ($keyword->getPrice() < 0) { ?>
                            <span title="Слово слишком конкурентно">Звоните</span>
                        <?php } else { ?>
                            <?= $keyword->getPrice() ?> руб
                        <?php } ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php if ($pageData->hintwords) { ?>
        <br/>
        <table class="b-calculatorTable b-calculatorTable__table">
            <thead>
            <tr>
                <th>Подсказки:</th>
                <th>Стоимость продвижения:</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($pageData->hintwords as $hintword) { ?>
                <tr>
                    <td>
                        <div>
                            <span title="редактировать"><?= CHtml::encode($hintword->getPhrase()) ?></span>
                                    <span class="b-calculatorForm__editHintButton" onclick="return {
                                        'keyword': <?= CJavaScript::encode($hintword->getPhrase()) ?>
                                        };">
                                        <img src="/images/calculator/edit.png" title="редактировать">
                                    </span>
                                    <span class="b-calculatorForm__deleteHintButton" onclick="return {
                                        'keyword': <?= CJavaScript::encode($hintword->getPhrase()) ?>
                                        };">
                                        <img src="/images/calculator/delete.png" title="удалить">
                                    </span>
                        </div>
                    </td>
                    <td>
                        <div style="text-align:right">
                            <?php if ($hintword->getPrice() < 0) { ?>
                                <span title="Слово слишком конкурентно">Звоните</span>
                            <?php } else { ?>
                                <?= $hintword->getPrice() ?> руб.
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    <div class="b-calculatorForm__result clearfix">
        <div class="b-calculatorForm__resultTitle">
            <b>Итого:&nbsp;</b>
            <?php if ($pageData->discount) { ?>
                (со скидкой <?= round($pageData->discount * 100) ?>%)
            <?php } ?>
        </div>
        <div class="b-calculatorForm__resultSum">
            <b><?= $pageData->totalCostWithDiscount ?> руб./мес</b>
        </div>
    </div>

    <div class="b-calculatorForm__label">
        <label for="request[keywords]">Добавьте в расчет ключевые слова/фразы:</label>
    </div>

    <div class="b-calculatorForm__field">
        <textarea name="request[addKeywords]"
                  id="request[keywords]"
                  class="b-calculatorForm__fieldInput b-calculatorForm__fieldInput_mode_keywords
                              b-calculatorForm__addKeywordsField"
            ></textarea>
    </div>
    <div>
        <button class="b-calculatorForm__submitButton" type="submit">
            <span class="b-calculatorForm__submitButtonText">
                Добавить слова!<span class="b-calculatorForm__submitButtonLoading"></span>
            </span>
        </button>
    </div>

    <div class="b-orderForm i-bem"
         onclick="return {'b-orderForm': {'uniqId': 'b-orderForm'}};">
        <span class="b-calculatorForm__orderButton b-orderForm__initButton">Заказать раскрутку</span>
    </div>
</form>
