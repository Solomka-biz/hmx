<?php
/**
 * @var $pageData CalculatorResultPageData
 * @var $form     CalculatorForm
 */

?>
<form class="b-orderForm i-bem b-orderForm__form b-orderForm__form_visibility_hidden"
      action="<?= \Yii::link()->order() ?>"
      method="post"
      onclick="return {'b-orderForm': {'uniqId': 'b-orderForm'}};">

    <input type="hidden" name="scenario" value="<?= OrderForm::SCENARIO_CALCULATOR ?>">

    <?php foreach ($pageData->keywords as $keyword) { ?>
        <input type="hidden" name="order[keywords][]"
               value="<?= base64_encode(serialize($keyword)) ?>"/>
    <?php } ?>
    <?php foreach ($pageData->hintwords as $keyword) { ?>
        <input type="hidden" name="order[hintwords][]"
               value="<?= base64_encode(serialize($keyword)) ?>"/>
    <?php } ?>

    <input type="hidden" name="order[discount]" value="<?= $pageData->discount ?>">
    <input type="hidden" name="order[totalCostWithDiscount]" value="<?= $pageData->totalCostWithDiscount ?>">

    <input type="hidden" name="order[url]" value="<?= CHtml::encode($form->url) ?>"/>
    <input type="hidden" name="order[phone]" value="<?= CHtml::encode($form->phone) ?>"/>

    <div>
        <strong>Ваше имя:</strong>
    </div>
    <div style="color: #ff5555">
        <?php if ($form->hasErrors('name')) { ?>
            <?= $form->getError('name') ?>
        <?php } ?>
    </div>
    <div>
        <input class="add" maxlength="250" name="order[name]" size="59">
    </div>

    <div>
        <strong>Ваш E-mail:</strong>
    </div>
    <div style="color: #ff5555">
        <?php if ($form->hasErrors('email')) { ?>
            <?= $form->getError('email') ?>
        <?php } ?>
    </div>
    <div>
        <input class="add" maxlength="250" name="order[email]" size="59">
    </div>

    <div>
        <button class="b-orderForm__submitButton" onclick="yaCounter1798900.reachGoal('ORDERCALC'); return true;" type="submit">Заказать</button>
    </div>

</form>
