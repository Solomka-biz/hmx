<?php
/**
 * @var $this SiteController
 */
$this->setHeadTitle('Сайт в подарок. Создадим сайт бесплатно при оплате продвижения - HMX.ru');
$this->setHeadDescription('Создаем сайты подготовленные к SEO продвижению бесплатно. Оплатите раскрутку сайта и получите новый сайт в подарок.');
$this->setHeadKeywords('создание и продвижение сайта, создание и раскрутка сайта, продвижение сайт бесплатно, раскрутка сайт бесплатно, продвижение создание сайта бесплатно, сайт в подарок');

$selectedMenuItem = UrlManager::SITE_ACTION_SITEFREE;
$this->setSelectedMenuItem($selectedMenuItem);
?>
<div class="body__main main">

    <div class="main__header">
        <h1 class="main__largeTitle">Сайт в подарок</h1>
        <div class="main__title">
            Закажите 3 месяца продвижения, <br />и мы сделаем сайт в подарок
        </div>
    </div>

    <div class="main__inner">
        <div class="page">
            <div class="page__header2">
                <h2 class="main__semiTitle">Какой сайт мы сделаем</h2>
                <p class="descript_sitefree">
                    Сайт включает в себя:
                <ul class="ul_sitefree">
                    <li>Современный дизайн с мобильной версией</li>
                    <li>Удобное управление через админ панель (CMS)</li>
                    <li>Наполнение текстом и изображениями</li>
                    <li>Оптимизацию под поисковые системы</li>
                </ul>
                <br>
                Мы создадим вам не просто сайт, а инструмент ориентированный на привлечение реальных клиентов, эффективно продающий товары и услуги.
                </p>
            </div>

            <h2 class="main__semiTitle">Сколько это стоит:</h2>
            <div class="sitefree__prices-wrapper row">
                <div class="sitefree__prices col-sm-5">
                    <div class="title">
                        Месяц <br>
                        продвижения
                    </div>
                    <div class="text">
                        49 900 руб.
                    </div>
                </div>
                <div class="sitefree__plus col-sm-2">
                    +
                </div>
                <div class="sitefree__prices col-sm-5">
                    <div class="title">
                        Создание <br>
                        сайта
                    </div>
                    <div class="text">49 900 руб.</div>
                </div>
            </div>

            <div class="sitefree__eq d-xs-block d-sm-none">=</div>

            <div class="sitefree__prices-wrapper justify-content-center row">
                <div class="sitefree__prices">
                    <div class="title">
                        Создание сайта +<br>
                        3 месяца продвижения
                    </div>
                    <div class="text">
                        149 700 руб.
                    </div>
                    <div class="text-dop">
                        ( Экономия 49 900 руб. )
                    </div>
                </div>
            </div>


            <div class="form__block">
                <div class="form__container">
                    <form action="<?= \Yii::link()->order() ?>" method="POST">
                        <div class="form__header">Отправьте нам заявку и мы<br>свяжемся с вами</div>

                        <div class="form__input">
                            <label for="name" class="form__label-3">Ваше имя</label>
                            <input type="text" name="order[name]">
                        </div>
                        <input type="hidden" value="Сайта нет" name="order[url]">
                        <input type="hidden" value="Заказ сайта по акции за 149 700 руб." name="order[massage]">

                        <div class="form__input">
                            <label for="email" class="form__label-2">Контакт для связи</label>
                            <input type="text" name="order[email]" placeholder="Ваш телефон или e-mail">
                        </div>

                        <input type="submit" value="Отправить" class="btn btn-success form__submit" onclick="yaCounter1798900.reachGoal('ORDERSITEFREEFORM'); return true;">
                    </form>
                </div>
            </div>

            <h2 class="clients__title h2title">Об акции</h2>

            <div class="page__header2">
                <h2 class="main__semiTitle">Как это работает</h2>
                <p class="descript_sitefree">
                    Все довольно просто:
                <ul class="ul_sitefree">
                    <li>Вы отправляее нам заявку</li>
                    <li>Оплачиваете 3 месяца продвижения - 149 700 руб.</li>
                    <li>Мы создаем вам сайт бесплатно</li>
                </ul>
                </p><br>
                И это будет сайт оптимизированный под поисковые системы, ориентированный на привлечение реальных клиентов,
                эффективно продающий товары и услуги.
            </div>


            <div class="page__header2">
                <h2 class="main__semiTitle">Наши преимущества:</h2>
                <p class="descript_sitefree">
                <ul class="ul_sitefree">
                    <li>Быстро – у вас будут новые клиенты через 3-5 недель</li>
                    <li>Эффективно – сайт будет работать на вас и после 3-х месяцев продвижения</li>
                    <li>Выгодно – экономия на создании сайта = 49 900 р.</li>
                    <li>Без границ – о ваших товарах и услугах узнают в сети Интернет</li>
                </ul>
                </p>
            </div>


            <!--noindex-->
            <div class="clients">
                <h2 class="main__semiTitle">Уже созданные нами сайты:</h2>
                <div class="clients__wrap">
                    <div class="clients__item">
                        <div class="clients__center">
                            <a class="clients__circle" href="http://www.kristall-auto.ru" target="_blank" rel="nofollow">
							<span class="clients__cwrap">
								<img src="/images/kristall.png" class="clients__logo" />
								<span class="clients__site">www.kristall-auto.ru</span>
							</span>
                            </a>
                        </div>
                        <div class="clients__right2">
                            <span style="font-family: sans-serif;"><b>Задача:</b></span> максимально быстро набрать учеников на новый учебный курс, используя интернет-ресурсы.<br><br>
                            <span style="font-family: sans-serif;"><b>Результат:</b></span> полностью обновлен сайт, через два месяца свободные места во всех группах на курсе были заполнены.
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="clients__wrap">
                    <div class="clients__item">
                        <div class="clients__center">
                            <a class="clients__circle" href="http://www.west-vtor-met.ru" target="_blank" rel="nofollow">
							<span class="clients__cwrap">
								ВестВторМет
								<span class="clients__site">west-vtor-met.ru</span>
							</span>
                            </a>
                        </div>
                        <div class="clients__right2">
                            <span style="font-family: sans-serif;"><b>Задача:</b></span> настроить поток посетителей, интересующихся ценой на металолм и желающих сдать лом по хорошей цене.<br><br>
                            <span style="font-family: sans-serif;"><b>Результат:</b></span> сайт создан с нуля, выведен в топ в Санкт-Петербурге по словам: металлолом, прием металлолома, цены на металлолом, цены на прием лома итп.
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="clients__wrap">
                    <div class="clients__item">
                        <div class="clients__center">
                            <a class="clients__circle" href="http://sherbinkavet.ru/" target="_blank" rel="nofollow">
							<span class="clients__cwrap">
								Ветклиника в Щербинке
								<span class="clients__site">sherbinkavet.ru</span>
							</span>
                            </a>
                        </div>
                        <div class="clients__right2">
                            <span style="font-family: sans-serif;"><b>Задача:</b></span> привлечь клиентов в локальном районе Щербинка и из соседних районов города.<br><br>
                            <span style="font-family: sans-serif;"><b>Результат:</b></span> обновлена старая версия сайта, настроена мобильная версия, проведена раскрутка сайта в необходимых районах города.
                        </div>
                    </div>
                </div>

                <!--  <h2 class="main__semiTitle">Последние созданные сайты:</h2>

              <div class="page__team team row text-center">
                    <div class="team__item col-sm-6 col-md-4">
                        <a href="http://medhimki.ru/" target="_blank" rel="nofollow">
                            <img src="images/portfolio/portfolio_1.jpg" class="team__photo" />
                            <div>
                                <span class="clients__site">medhimki.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="team__item col-sm-6 col-md-4">
                        <a href="http://cleaningroom.ru/" target="_blank" rel="nofollow">
                            <img src="images/portfolio/cleaningroom.ru.jpeg" class="team__photo" />
                            <div>
                                <span class="clients__site">cleaningroom.ru</span>
                            </div>
                        </a>
                    </div>
                    <div class="team__item col-sm-6 col-md-4">
                        <a href="http://prodamkuplu.ru/" target="_blank" rel="nofollow">
                            <img src="images/portfolio/portfolio_3.jpeg" class="team__photo" />
                            <div>
                                <span class="clients__site">prodamkuplu.ru</span>
                            </div>
                        </a>
                    </div>
                 <div class="team__item col-sm-6 col-md-4">
                        <a href="http://swoe-delo.ru/" target="_blank" rel="nofollow">
                            <img src="images/portfolio/portfolio_2.jpeg" class="team__photo" />
                            <div>
                                <span class="clients__site">swoe-delo.ru</span>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
            <!--/noindex -->

            <hr class="divider">

            <div class="mainFormindex main__test b-analyzerForm i-bem b-analyzerForm_js_inited">
                <div class="mainForm__title">Напишите нам</div>
                <?= $this->renderPartial('//layout/_feedback_freesite') ?>
            </div>


        </div>

        <?=
        $this->renderPartial(
            '//layout/_mainNav',
            [
                'selectedItem' => $selectedMenuItem,
            ]
        ) ?>

    </div>
</div>
