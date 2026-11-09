<?php
/**
 * @var $this AdminController
 * @var $logs CalculatorLogDocument[]
 */

?>
<p class="lead">Логи калькулятора</p>
<table class="table table-hover table-condensed">
    <thead>
    <tr>
        <th>Время</th>
        <th>Запрос</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($logs as $log) { ?>
        <tr>
            <td><?= $log->datetime ? date("d.m.Y H:i", $log->datetime->sec) : '--' ?></td>
            <td>
                <?php foreach ($log->keywords as $wordData) { ?>
                    <div>
                        <?= CHtml::encode($wordData['phrase']) ?>
                        (<i><?= $wordData['shows'] ?> показ(ов)</i> &mdash; <b><?= $wordData['price'] ?> руб.</b>)
                    </div>
                <?php } ?>
            </td>
            <td>
                <a href="#<?= $log->getPrimaryKey() ?>">
                    <i class="icon icon-search"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
