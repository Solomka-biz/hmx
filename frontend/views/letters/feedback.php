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


<center><b>Сообщение с сайта HMX</b></center>
<br>
<table border="0" cellpadding="2" cellspacing="0" width="100%">
    <tr>
        <td>
            <font face="Verdana" size="2">
                Данное сообщение получено с сайта
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
        <td><font face="Verdana" size="2"><b>Сообщение:</b> <?= CHtml::encode($form->message) ?></font></td>
    </tr>
    <tr>
        <td><font face="Verdana" size="2"><b>Телефон:</b> <?= CHtml::encode($form->phone) ?></font></td>
    </tr>
    <tr>
        <td><font face="Verdana" size="2"><b>Прочая информация:</b> <br> <?= CHtml::encode($form->url) ?></font></td>
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