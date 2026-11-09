<?php
/**
 * @var $form OrderForm
 */
$this->setHeadTitle('Заказ раскрутки сайтов - HMX.ru');
$selectedMenuItem = UrlManager::SITE_ACTION_ABOUT;
$this->setSelectedMenuItem($selectedMenuItem);
?>
<div class="body__main main">
    <div class="main__header">
        <h1 class="main__largeTitle">Заказ отправлен!</h1>

        <div class="main__title">
            Спасибо, <?= CHtml::encode($form->name) ?>!
        </div>

    </div>

    <div class="main__inner main__inner_page">
        <div class="page">
            <div class="page__header">
                <h1 style="
    color: #FFAD3B;
    font-size: 100px;
	padding-bottom: 70px;
">\ :=) /</h1>
                В ближайшие рабочие часы с вами свяжется<br /> наш менеджер
                по указанным<br /> в заказе контактам.<br /><br /><br />
            </div>
            <?=
            $this->renderPartial(
                '//layout/_mainNav',
                [
                    'selectedItem' => $selectedMenuItem,
                ]
            ) ?>


            <?php if ($form->getScenario() === OrderForm::SCENARIO_CALCULATOR) { ?>
                <div>
                    <i><a href="<?= \Yii::link()->calculator() ?>">назад</a></i>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
