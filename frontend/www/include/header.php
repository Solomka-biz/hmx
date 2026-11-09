<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body class="body body__page">

<div class="body__wrapper">
    <div class="body__header header">

        <ul class="header__nav header__nav_left headerNav">
            <li class="headerNav__item headerNav__item_services headerNav__item_active">
                <a href="/index_new.php" class="headerNav__itemLink">Продвижение сайтов</a>
            </li>
            <li class="headerNav__item headerNav__item_prices">
                <a href="/zeni.html"
                   class="headerNav__itemLink">Сроки и цены
                </a>
            </li>
        </ul>

        <div class="header__contact">
          <ul class="header__nav header__nav_contact headerNav headerNav_contact">
              <li class="headerNav__item headerNav__item_about">
                  <a href="/zakaz.html"
                     class="headerNav__itemLink">Сделать заказ
                  </a>
              </li>
          </ul>
            <span class="header__contactPhone">
<a href="/zakaz.html"
                     class="headerNav__itemLink">Сделать заказ
                  </a>
</span>
        </div>

        <a href="/index_new.php"
           class="header__logo  header__logo_large <? if (in_array(
               $_SERVER['REQUEST_URI'],
               array('/', '/app/frontend/www/index_new.php', '/index_new_loading.php')
           )
           ): ?>header__logo_large<? endif; ?>">Hostmax</a>
    </div>