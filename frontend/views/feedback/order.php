<?php
/**
 * @mailto calc@hmx.ru
 * @var $form OrderForm
 * @var $remoteIP
 */
$siteUrl = "https://www.hmx.ru";
?>
<!--suppress HtmlUnknownAttribute -->
<!--suppress HtmlDeprecatedTag -->
<!--suppress HtmlUnknownTag -->
<html>
<body bgcolor="#F5F5F5">


<center><b>Заказ HMX</b></center>
<br>
<table border="0" cellpadding="2" cellspacing="0" width="100%">
    <tr>
        <td>
            <font face="Verdana" size="2">
                Данный заказ получен с сайта
                <a target="_blank" href="<?= $siteUrl ?>"><?= $siteUrl ?></a>.
            </font>
        </td>
    </tr>
    <tr>
        <td>
            <hr color="#000000" size="1">
        </td>
    </tr>
    <tr>
        <td><font face="Verdana" size="2"><b>Клиент:</b> <?= CHtml::encode($form->name) ?></font></td>
    </tr>
    <tr>
        <td><font face="Verdana" size="2"><b>Электронная почта:</b> <?= CHtml::encode($form->phone) ?></font></td>
    </tr>
    <tr> 
        <td><font face="Verdana" size="2"><b>E-mail:</b>
                <a href="mailto:<?= CHtml::encode($form->email) ?>"><?=
                    CHtml::encode($form->email) ?></a></font></td>
    </tr>
    <tr>
        <td height="13"></td>
    </tr>
    <tr>
        <td><font face="Verdana" size="2">
                <b>Сайт:</b> <?= CHtml::encode($form->url) ?><br>

                <b>Прочая информация:</b><br>
                <?php if ($form->getScenario() == OrderForm::SCENARIO_DEFAULT) { ?>
                    Заказ со страницы "Заказать"
                <?php } elseif ($form->getScenario() == OrderForm::SCENARIO_CALCULATOR) { ?>
                    Заказ со страницы "Калькулятор"<br/>

                    <font face="Verdana" size="2"><b>Результаты расчёта:</b></font><br/>
                    <table style="border: 1px solid #000000; margin: auto; border-spacing: 0;">
                        <thead>
                        <tr>
                            <th style="margin: 0; border: 1px solid #000000; background-color: #cccccc; padding: 5px;"
                                >Ключевые слова
                            </th>
                            <th style="margin: 0; border: 1px solid #000000; background-color: #cccccc; padding: 5px;"
                                >Показы
                            </th>
                            <th style="margin: 0; border: 1px solid #000000; background-color: #cccccc; padding: 5px;"
                                >Стоимость продвижения
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $tdStyle = "padding: 5px; margin: 0; border: 1px solid #000000;"; ?>

                        <?php foreach ($form->keywords as $keyword) { ?>
                            <tr>
                                <td style="<?= $tdStyle; ?>"><?= CHtml::encode($keyword->getPhrase()) ?></td>
                                <td style="<?= $tdStyle; ?>"><?= CHtml::encode($keyword->getShows()) ?></td>
                                <td style="<?= $tdStyle; ?>"><?= CHtml::encode($keyword->getPrice()) ?></td>
                            </tr>
                        <?php } ?>
                        <?php foreach ($form->hintwords as $hintword) { ?>
                            <tr>
                                <td style="<?= $tdStyle; ?>"><?= CHtml::encode($hintword->getPhrase()) ?></td>
                                <td style="<?= $tdStyle; ?>"><?= CHtml::encode($hintword->getShows()) ?></td>
                                <td style="<?= $tdStyle; ?>"><?= CHtml::encode($hintword->getPrice()) ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2" style="background-color: #EEEEEE;">
                                Итого:
                                <?php if ($form->discount) { ?>
                                    (со скидкой <?= round($form->discount * 100) ?>%)
                                <?php } ?>
                            </td>
                            <td style="background-color: #EEEEEE;">
                                <?= $form->totalCostWithDiscount ?> руб./мес
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                <?php } ?>

            </font></td>
    </tr>
    <tr>
        <td height="13"></td>
    </tr>
    <tr>
        <td>
            <hr color="#000000" size="1">
        </td>
    </tr>
    <tr>
        <td>
            <font face="Verdana" size="2"> IP адрес клиента: <?= $remoteIP ?></font>
        </td>
    </tr>
</table>
</BODY>
</html>