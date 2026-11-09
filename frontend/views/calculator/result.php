<?php
/**
 * @var $this     CalculatorController
 *
 * @var $pageData CalculatorResultPageData
 * @var $form     CalculatorForm
 */
\Yii::clientScript()->registerPackage('app.pages.calculator');
$this->setHeadTitle('Калькулятор стоимости продвижения сайта.');
?>
<div class="body__main inside">
    <div class="inside__inner">

        <h1 class="inside__title">Результат расчета:</h1>

        <div class="calculator">
            <div class="calculator__resultContent">
                <?= $this->renderPartial('_resultForm', ['pageData' => $pageData, 'form' => $form]) ?>
                <?= $this->renderPartial('_orderForm', ['pageData' => $pageData, 'form' => $form]) ?>
                <br/>
                <br/>

                <div>
                    <i><a href="<?= \Yii::link()->calculator() ?>">назад к калькулятору</a></i>
                </div>

            </div>
            <div class="calculator__resultSidebar">
                <?= $this->renderPartial('_resultSidebar', ['pageData' => $pageData, 'form' => $form]) ?>

            </div>

        </div>


    </div>
</div>
