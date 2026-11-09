<?php
/**
 * @var $pageData CalculatorResultPageData
 * @var $form     CalculatorForm
 */

$dateText = date('Y-m-d');

?>
<html>
<head>
    <meta charset="utf-8">
    <style>
        h1, h2 {
            text-align: center;
        }

        table {
            border: 1px solid #000000;
            margin: auto;
            border-spacing: 0;
        }

        thead th {
            margin: 0;
            border: 1px solid #000000;
            background-color: #cccccc;
            padding: 5px;
        }

        tfoot td {
            background-color: #EEEEEE;
        }

        tr {
            margin:  0;
            padding: 0;
        }

        td {
            padding: 5px;
            margin: 0;
            border: 1px solid #000000;
        }

    </style>
</head>
<body>
<h1>Результаты расчета</h1>

<h2><?= CHtml::encode($form->url) ?> <?= $dateText ?></h2>

<table>
    <thead>
    <tr>
        <th>Ключевые слова</th>
        <th>Показы</th>
        <th>Стоимость продвижения</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pageData->keywords as $keyword) { ?>
        <tr>
            <td><?= CHtml::encode($keyword->getPhrase()) ?></td>
            <td><?= CHtml::encode($keyword->getShows()) ?></td>
            <td><?= CHtml::encode($keyword->getPrice()) ?></td>
        </tr>
    <?php } ?>
    <?php foreach ($pageData->hintwords as $hintword) { ?>
        <tr>
            <td><?= CHtml::encode($hintword->getPhrase()) ?></td>
            <td><?= CHtml::encode($hintword->getShows()) ?></td>
            <td><?= CHtml::encode($hintword->getPrice()) ?></td>
        </tr>
    <?php } ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2">
            Итого:
            <?php if ($pageData->discount) { ?>
                 (со скидкой <?= round($pageData->discount * 100) ?> %)
            <?php } ?>
        </td>
        <td>
            <?= $pageData->totalCostWithDiscount ?> руб./мес
        </td>
    </tr>
    </tfoot>
</table>
</body>
</html>