<?php
/**
 * @var $form CalculatorForm
 */
$this->setHeadTitle('Калькулятор стоимости продвижения сайта. Автоматический расчет стоимости раскрутки.');
$this->setHeadDescription(
    'Калькулятор раскрутки. Калькулятор продвижения сайта на HMX.ru. Автоматический калькулятор стоимости раскрутки сайта.'
);

\Yii::clientScript()->registerPackage('app.pages.calculator');
?>
<div class="body__main inside">
    <div class="inside__inner">

        <h1 class="inside__title">Калькулятор раскрутки!</h1>


        <form action="<?= \Yii::link()->calculator(UrlManager::CALCULATOR_ACTION_PROCESS) ?>"
              method="post" class="b-calculatorForm i-bem"
              onclick="return {'b-calculatorForm': {}};">

            <input type="hidden" name="scenario" value="<?= CalculatorForm::SCENARIO_INITIAL ?>"/>

            <?php if (false && $form->hasErrors()) { ?>
                <div class="b-calculatorForm__formError">
                    При заполнение формы возникли ошибки.
                </div>
            <?php } ?>


            <div class="b-calculatorForm__label">
                <label for="request[url]">Введите адрес Вашего сайта:</label>
            </div>
            <div class="b-calculatorForm__field">
                <div class="b-calculatorForm__fieldError">
                    <?php if ($form->hasErrors('url')) { ?>
                        <?= $form->getError('url') ?>
                    <?php } ?>
                </div>
                <span>http://</span>
                <input name="request[url]"
                       maxlength="250"
                       id="request[url]"
                       class="b-calculatorForm__fieldInput b-calculatorForm__fieldInput_mode_url"
                       value="<?= $form->url ?>">
            </div>

            <div class="b-calculatorForm__label">
                <label for="request[keywords]">Введите ключевые слова/фразы:</label>
            </div>
            <div class="b-calculatorForm__fieldError">
                <?php if ($form->hasErrors('keywords')) { ?>
                    <?= $form->getError('keywords') ?>
                <?php } ?>
            </div>
            <div class="b-calculatorForm__field">
                <textarea name="request[keywords]"
                          id="request[keywords]"
                          class="b-calculatorForm__fieldInput b-calculatorForm__fieldInput_mode_keywords"
                    ><?= join("\n", $form->keywords) ?></textarea>
            </div>

            <div class="b-calculatorForm__label">
                <label for="request[phone]">Укажите адрес вашей электронной почты:</label>
            </div>
            <div class="b-calculatorForm__fieldError">
                <?php if ($form->hasErrors('phone')) { ?>
                    <?= $form->getError('phone') ?>
                <?php } ?>
            </div>
            <div class="b-calculatorForm__field">
                <input maxlength="250"
                       name="request[phone]" id="request[phone]"
                       class="b-calculatorForm__fieldInput b-calculatorForm__fieldInput_mode_phone"
                       value="<?= $form->phone ?>">
            </div>

            <div>
                <button class="b-calculatorForm__submitButton" type="submit">
                        <span class="b-calculatorForm__submitButtonText">
                            Рассчитать!
                            <span class="b-calculatorForm__submitButtonLoading"></span>
                        </span>
                </button>
            </div>
        </form>


    </div>
</div>
