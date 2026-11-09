<?php
/**
 * @var $this          SiteController
 * @var $analyzerError boolean
 */

$this->setHeadTitle('Самое быстрое продвижение сайтов - первые результаты SEO раскрутки через 7 дней. Увеличим продажи с помощью продвижения сайта.');
$this->setHeadDescription('Продвижение сайта за 15 000 руб в месяц. Фиксированная цена на SEO продвижение в поисковых системах.');
$this->setHeadKeywords('раскрутка сайта, раскрутка сайтов, продвижение сайта, подвижение сайтов, продвижение сайта в Москве, продвижение сайтов в Москве');

$selectedMenuItem = UrlManager::SITE_ACTION_INDEX;
$this->setSelectedMenuItem($selectedMenuItem);

\Yii::clientScript()->registerPackage('app.pages.main');
?>
<link rel="canonical" href="https://www.hmx.ru" />
<div class="body__main main">

    <div class="main__header main__header_index">
        <img class="d-none d-md-inline-block" src="/images/logo-big.svg" alt="Раскрутка сайта">
        <h1 class="main__title">Продвинем ваш бизнес в сети Интернет</h1>
    </div>

    <div class="main__inner">


        <div class="benefits main__benefits">
            <div class="benefits__wrap row">
                <div class="col-sm-4 benefits__item">
                    <img src="images/1-comlete.svg" alt="Выгодно" class="benefits__icon benefits__icon_comlete">
                    <div class="benefits__title">Выгодно</div>
                    <div class="benefits__text">
                        7 специалистов<br>
                        разных направлений<br>
                        по цене одного.<br>
                    </div>
                </div>
                <div class="col-sm-4 benefits__item">
                    <img src="images/start.svg" alt="Масштабно" class="benefits__icon benefits__icon_start" style="
    margin-bottom: 3px;">
                    <div class="benefits__title">Масштабно</div>
                    <div class="benefits__text">
                        Найдем всех <br>
                        ваших клиентов <br>
                        в сети Интернет.<br>
                    </div>
                </div>
                <div class="col-sm-4 benefits__item">
                    <img src="images/1-for-sure.svg" alt="С гарантией" class="benefits__icon benefits__icon_for_sure">
                    <div class="benefits__title">С гарантией</div>
                    <div class="benefits__text">
                        Сначала работаем,<br>
                        присылаем отчет,<br>
                        потом вы платите.<br>
                    </div>
                </div>
            </div>
        </div>

        <div class="page">
            <div class="page__header">
    Обеспечим <br><span class="text__yell">стабильный поток заказов</span><br> с помощью профессиональной настройки рекламы.
            </div>
        </div>
<br><br><br>

        <div class="form__block">
            <div class="form__container">
                <form action="<?= \Yii::link()->order() ?>" method="POST">
                    <div class="form__header">Интересно? Мы пришлём вам
план продвижения в течение 24-х часов</div>

                    <div class="form__input">
                        <label for="name" class="form__label-3">Ваше имя</label>
                        <input type="text" name="order[name]">
                    </div>

                    <div class="form__input">
                        <label for="website" class="form__label-1">Адрес вашего сайта</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">http://</div>
                            </div>
                            <input type="text" name="order[url]">
                        </div>
                    </div>

                    <div class="form__input">
                        <label for="email" class="form__label-2">Контакт для связи</label>
                        <input type="text" name="order[email]" placeholder="Ваш номер телефона">
                    </div>

                    <input type="hidden" value="Заказ продвижения с 1 формы главной страницы" name="order[massage]">

                    <input type="submit" value="Отправить" class="form__submit btn btn-success" onclick="yaCounter1798900.reachGoal('COMPREDINDEX'); return true;">
                </form>
<!-- <center><br><br>
    <a href="/zeni.html" style="
    font-size: 20px;
    font-weight: 700;
    font-family: initial;
    color: #599ce4;
    /* text-align: center; */
    ">Подробнее о тестовом периоде</a>
</center> -->

            </div>
        </div>

        <?php
        $optimiz_blocks = [];

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Главная <br>цель';
        $b->badge_type = '';
        $b->badge_fill = '#42D5C6';
        $b->title = 'Используем сайт как инструмент продаж';
        $b->description = '
            Сделать так, чтобы сайт жил и приносил прибыль — реально. Сейчас это такой же инструмент продаж, как раньше были листовки, баннеры, объявления в газетах. Только в десятки раз эффективнее. 
<br><br>
И если со старыми-добрыми газетами все было понятно, достаточно было написать хороший текст и разместить в нужный раздел читаемого издания, то сайт, как более абстрактный инструмент, требует дополнительно развития и продвижения.
<br><br>
Эту задачу важно поручить специалистам, которые знают и понимают как это делается. Мы полностью возьмем на себя работу с сайтом, его продвижением и добьемся повышения продаж.
        ';
        $optimiz_blocks[] = $b;


        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Эффект <br>отдачи';
        $b->badge_type = '';
        $b->badge_fill = '#ff9922';
        $b->title = 'Повышаем эффективность рекламы';
        $b->description = '
            Эффективность рекламной кампании измеряется в горячих клиентах. Они пришли и готовы купить. 
    <br><br>
Мы настраиваем рекламу на клиентов, которые уже созрели для покупки. Приводим их на сайт и не оставляем им шансов.
    <br><br>
    Правильно настроенная реклама даже при небольшом бюджете приносит заявки, звонки и продажи.
        ';
        $optimiz_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Секрет <br>роста';
        $b->badge_type = '';
        $b->badge_fill = '#60d513';
        $b->title = 'Подключаем и развиваем соц сети';
        $b->description = '
            Даже находясь за компьютером, современные люди через телефон параллельно сидят в социальных сетях. И ваша компания тоже должна быть в двух, трех или четырех местах сразу. 
    <br><br>
Мы предлагаем комплексное продвижение вашего бизнеса в соцсетях: от создания и оформления группы до выхода постов, повышения охватов и поддержания активности. У соцсетей широкий функционал. Он позволяет показать актуальное время работы, контактные данные, забронировать время и др.
    <br><br>
Для вас это прямой диалог с клиентами и сокращение дистанции между компанией и живым человеком. Люди идут общаться в соцсети, поэтому им психологически проще написать сообщение или комментарий в группу, чем использовать форму на сайте. 
    <br><br>
Продавайте, поддерживайте имидж, взаимодействуйте с аудиторией, делитесь информацией через соцсети — будьте везде. Не оставляйте места конкурентам.
        ';
        $optimiz_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Фиксация<br> успеха';
        $b->badge_type = '';
        $b->badge_fill = '#af22ff';
        $b->title = 'Репутация компании и обгон конкурентов';
        $b->description = '
            В интернете конкурентов больше, чем в реальном мире, новые сайты создаются ежедневно. Но покупатели склонны доверять проверенному продавцу, поэтому они штудируют отзывы, изучают историю компании, спрашивают рекомендации у знакомых.
    <br><br>
Можно ли повлиять на процесс выбора в вашу сторону? Да. Для этого мы и работаем над репутацией вашей компании в сети:<br><br>
    <ul style="
    list-style: inherit;
">
<li>пишем отзывы и обзоры на главных имиджевых площадках</li>
<li>насыщаем сайт полезными статьями, которые вызывают доверие</li>
<li>мониторим конкурентов, чтобы быть на шаг впереди</li>
<li>обеспечиваем стабильную работу сайта и сервиса обратной связи</li>
        </ul>
<br>
Доверьте управление своей репутацией профессионалам, чтобы стать лидером в интернете и жизни.
        ';
        $optimiz_blocks[] = $b;

        // ---------------------------------------------

        unset($b);
        ?>

        <div class="page__optimiz optimiz">
            <h2 class="title">Решаем все задачи <br> под ключ!</h2>

            <?php foreach ($optimiz_blocks as $block) : ?>
                <div class="block">
                    <div class="img">
                        <div class="img__container">
                            <svg version="1.1"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px"
                                 width="146px" height="85px"
                                 viewBox="0 0 146 85"
                                 xml:space="preserve"
                            ><path d="M146,85H0l27.6-42.5L0,0h146V85z" fill="<?= $block->badge_fill ?>" /></svg>
                            <span class="text <?= $block->badge_type ?>"><?= $block->badge_text ?></span>
                        </div>
                    </div>

                    <div class="full-text">
                        <div class="name"><?= $block->title ?></div>
                        <div class="description"><?= $block->description ?></div>
                    </div>
                </div>
            <?php endforeach ?>

            <div class="flag-leader">
                <div class="text">№1<br><span>лидер</span></div>
                <img class="img" src="images/flag.svg" alt="">
            </div>
        </div>


        <div class="form__block">
            <div class="form__container">
                <form action="<?= \Yii::link()->order() ?>" method="POST">
                    <div class="form__header">Отправьте заявку на продвижение сайта
                        <br>по цене 15 000 руб/мес.
                    </div>

                    <div class="form__input">
                        <label for="name" class="form__label-3">Ваше имя</label>
                        <input type="text" name="order[name]">
                    </div>

                    <div class="form__input">
                        <label for="website" class="form__label-1">Адрес вашего сайта</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">http://</div>
                            </div>
                            <input type="text" name="order[url]">
                        </div>
                    </div>

                    <div class="form__input">
                        <label for="email" class="form__label-2">Контакт для связи</label>
                        <input type="text" name="order[email]" placeholder="Ваш номер телефона">
                    </div>
                    <input type="hidden" value="Заказ продвижения со 2 формы главной страницы" name="order[massage]">

                    <input type="submit" value="Отправить" class="form__submit btn btn-success" onclick="yaCounter1798900.reachGoal('ORDERINDEX'); return true;">
                </form>
            </div>
        </div>

        <?php
        $clients_blocks = [];

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Деловой<br>бизнес журнал';
        $b->title = 'Человек дела';
        $b->site = 'www.chief-time.ru';
        $b->description = '
                За продвижением обратился руководитель федеральной сети бизнес изданий “Человек дела”. 
<br><br>
    <b style="
    font-family: ProximaNova-Bold;
">Что сделали:</b> проработали стратегию SEO-продвижения в Москве и еще нескольких городах России, выбрали самые популярные конкурентные ключевые запросы, произвели настройку сайта. 
<br><br>
    <b style="
    font-family: ProximaNova-Bold;
">Что получилось:</b> топовые результаты в выдаче Яндекса, повышение количества посетителей, возросший интерес у читателей сайта и журнала.
        ';
        $b->reviewer_img = 'images/reviews/tc.png';
        $b->reviewer_name = 'Тимофей <br>Кареба';
        $b->reviewer_post = 'основатель <br>журнала';
        $b->review_text = '
            Замечательная компания и чуткие менеджеры. Реализовали индивидуальный подход на деле, а не словах: договорились о частичной оплате услуг на бартерной основе. Спасибо Андрею Сергееву - руководителю, за личный контроль и внимательность.
        ';
        $clients_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'строительная<br>компания';
        $b->title = 'Архитоника';
        $b->site = 'spb.arhitonika.ru';
        $b->description = '
            Архитоника - сайт с архитектурной электрикой, большим ассортиментом товаров и услуг, компания работает с частниками и оптовиками. 
<br><br>
<b style="font-family: ProximaNova-Bold;">
    Наши задачи:</b> привлечь посетителей, увеличить продажи с поисковой выдачи и рекламы.
<br><br>
<b style="font-family: ProximaNova-Bold;">
    Наши действия:</b> провели SEO-аудит и адаптацию сайта, разработали и протестировали несколько стратегий продвижения, расширили аудиторию.
<br><br>
<b style="font-family: ProximaNova-Bold;">
    Результаты работы:</b> довольный руководитель с возрастающими продажами, новые клиенты, окупаемость услуг продвижения и стабильный рост прибыли.
        ';
        $b->reviewer_img = 'images/reviews/popov1.png';
        $b->reviewer_name = 'Андрей <br>Попов';
        $b->reviewer_post = 'руководитель <br>компании';
        $b->review_text = '
            Поделюсь своим опытом сотрудничества с ХостМакс: команда профессионалов в своей области, с самого начала разработали эффективную стратегию продвижения, выявили недостатки сайта, спроектировали все необходимые изменения в структуре. 
<br><br>
После этого провели все необходимые работы по оптимизации. Результаты их работы сразу ощущаются на количестве посетителей и соответственно заказчиках. Очень рекомендую!
        ';
        $clients_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'интернет магазин<br>фейерверков';
        $b->title = 'Фейерверкин';
        $b->site = 'www.feerverkin.ru';
        $b->description = '
            Клиент с новым сайтом и 0 посетителей пришел за продвижением. 
<br><br>
<b style="font-family: ProximaNova-Bold;">
Наша задача:</b> привести на сайт клиентов, поднять в выдаче.
<br><br>
<b style="font-family: ProximaNova-Bold;">
Наше решение:</b> классическое продвижение за счет SEO. Отобрали ключевые слова, которые включали в себя названия категорий и товаров сайта, которые ищут в интернете.
<br><br>
<b style="font-family: ProximaNova-Bold;">
Результат работы:</b> ТОП в Гугл через месяц и через полтора - ТОП в Яндексе, стабильный рост посетителей и заявок.
        ';
        $b->reviewer_img = 'images/reviews/2.jpg';
        $b->reviewer_name = 'Илья <br>Жуков';
        $b->reviewer_post = 'основатель <br>компании';
        $b->review_text = '
            Хочу сказать огромное СПАСИБО команде HMX.ru! Я пришел сюда с новым сайтом, естественно, его не было видно нигде, заказов не было, звонков тоже. Ребята оперативно подобрали ключевые слова по моей тематике и раскрутили сайт в Интерете. Через месяц у меня появились ТОПовые позиции в Google.com, а еще через пару недель мой сайт feerverkin.ru стал занимать лидирующие позиции и в Yandex.ru. Сейчас по всем ключевым словам мой сайт на первых страницах поисковиков в Санкт-Петербурге! Это очень позитивно сказалось на продажах. Особенно приятно, что когда я решил делать ре-дизайн сайта, меня не оставили один на один с проблемой, а помогли советами и рекомендациями - как не потерять позиции при обновлении.
        ';
        $clients_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'торговая площадка,<br>социальная сеть';
        $b->title = 'Репка';
        $b->site = 'www.repka.ru';
        $b->description = '
            Репка - необычный сайт. Их продвижением мы занимались в 140 регионах. Добились того, что на сайт ежемесячно заходит более 5 млн. посетителей.
        ';
        $b->reviewer_img = 'images/reviews/vf.png';
        $b->reviewer_name = 'Валентин <br>Филиппов';
        $b->reviewer_post = 'основатель <br>проекта';
        $b->review_text = '
            Обратились к компании Хостмакс еще на стадии разработки нашего стартапа. Не верили что получится, но решили попробовать. Результаты же превзошли все наши ожидания. Мы на первых местах везде где только можно. Поток посетителей вырос на 700%. Не успеваем обрабатывать заказы. Это успех!
        ';
        $clients_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Веб IT<br>компания';
        $b->title = 'Фабрика сайтов';
        $b->site = 'www.fabricasaitov.ru';
        $b->description = '
            Фабрика сайтов - наши коллеги с огромным количеством конкурентов.
В списке ключевых слов очень много запросов и нам удалось вывести сайт компании в топ по большинству из них. Подняли посещаемость сайта до 1,5 тысяч посетителей в сутки.
        ';
        $b->reviewer_img = 'images/reviews/dz.png';
        $b->reviewer_name = 'Дмитрий <br>Захарьев';
        $b->reviewer_post = 'генеральный <br>директор';
        $b->review_text = '
            У компании ХостМакс, пожалуй, лучшее соотношение цены и качества на SEO услуги. Акцент делается на скорости продвижения без потери качества. 

Уже более 7 лет достигнутый результат продвижения не теряется. Наш сайт находится в топе выдачи, количество обращений и заявок также остается высоким.
        ';
        $clients_blocks[] = $b;

        // ---------------------------------------------

        unset($b);
        ?>

        <div class="clients">

            <h2 class="title">Истории успеха</h2>

            <?php foreach ($clients_blocks as $block) : ?>
                <div class="block">
                    <div class="about">
                        <div class="img">
                            <div class="img__container">
                                <svg version="1.1"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px"
                                     width="231px" height="85px"
                                     viewBox="0 0 231 85"
                                     xml:space="preserve"
                                ><path d="M231,85H0l27.6-42.5L0,0h231V85z" fill="#F15A24" /></svg>
                                <span class="text"><?= $block->badge_text ?></span>
                            </div>
                        </div>

                        <div class="full-text">
                            <div class="name"><?= $block->title ?></div>
                            <div class="site"><?= $block->site ?></div>
                            <div class="description"><?= $block->description ?></div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="text"><?= $block->review_text ?></div>
                        <div class="reviewer">
                            <div class="img">
                                <img
                                    src="<?= $block->reviewer_img ?>"
                                    alt="<?= strip_tags($block->reviewer_name) ?>"
                                >
                            </div>
                            <div class="name"><?= $block->reviewer_name ?></div>
                            <div class="post"><?= $block->reviewer_post ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <? /*
        <div class="more-clients">Все истории успеха</div>
        */ ?>

        <h2 class="page__middleTitle">1 минутное видео <br>о продвижении сайтов</h2>

        <div class="page__team team">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aQzSu1p0IlQ?rel=0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
            </div>
        </div>

        <?= $this->renderPartial('//layout/_mainNav') ?>

    </div>
</div>
