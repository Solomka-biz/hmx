<?php
/**
 * @var $this AdminController
 */
$this->getBootstrap()->register();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Админка</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <a class="brand" href="<?= \Yii::link()->admin() ?>">HMX.ru</a>
        <ul class="nav">
            <li><a href="<?= \Yii::link()->admin() ?>">Калькулятор</a></li>
            <li><a href="<?= \Yii::link()->site(); ?>">Вернуться на сайт</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <?= $content ?>
</div>

</body>
</html>