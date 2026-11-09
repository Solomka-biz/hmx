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
        <td><font face="Verdana" size="2"><b>Телефон и E-mail:</b>
                <?= CHtml::encode($form->phone) ?> 
				<?= CHtml::encode($form->email) ?></font></td>
    </tr>
    <tr>
        <td height="13"><font face="Verdana" size="2"><b>Сайт:</b> <?= CHtml::encode($form->url) ?></font></td>
    </tr>
    <tr>
        <td><font face="Verdana" size="2">
		<br><br>
                <b>Прочая информация:</b><br>
				<?= CHtml::encode($form->massage) ?><br>
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