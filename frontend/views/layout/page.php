<?php
/**
 * @var $this    PageController
 * @var $content string
 */
$headTitle = $this->getHeadTitle() ? : '';
$headDescription = $this->getHeadDescription() ? : '';
$headKeywords = $this->getHeadKeywords() ? : '';
//\Yii::clientScript()->registerPackage('app.layouts.page');

$headerNav = [
    UrlManager::SITE_ACTION_INDEX => [
        \Yii::link()->site(UrlManager::SITE_ACTION_INDEX),
        'Личный бренд',
        'Личный бренд',
        'headerNav__item_services',
    ],
    UrlManager::SITE_ACTION_PRICES      => [
        \Yii::link()->site(UrlManager::SITE_ACTION_PRICES),
        'Сроки и цены',
        'Сроки и цены',
        'headerNav__item_prices',
    ],
];
$headerNav2 = [
    UrlManager::SITE_ACTION_ORDER       => [
        \Yii::link()->order(UrlManager::SITE_ACTION_ORDER),
        'Сделать заказ',
        'Заказать личный бренд',
        'headerNav__item_order',
    ],
];

\Yii::clientScript()->registerPackage('app.layouts.page');

$phoneNumber = '+7 (931) 009-44-40';
$phoneNumberClear = str_replace([' ', '(', ')', '-'], '', $phoneNumber);

$navMobile = array_merge(
    $headerNav,
    [
        UrlManager::SITE_ACTION_ABOUT => [
            \Yii::link()->site(UrlManager::SITE_ACTION_ABOUT),
            'О компании',
            'О компании',
            'menu-item-about'
        ],
    ],
    $headerNav2
//    [
//        'wiki' => [
//            \Yii::link()->wiki(),
//            'Энциклопедия личного бренда',
//            'Энциклопедия личного бренда',
//            'menu-item-wiki'
//        ],
//        'answers' => [
//            \Yii::link()->answers(),
//            'Вопросы и ответы',
//            'Вопросы и ответы',
//            'menu-item-answers'
//        ],
//        'site' => [
//            \Yii::link()->site(UrlManager::SITE_ACTION_MAP),
//            'Карта сайта',
//            'Карта сайта',
//            'menu-item-site-map'
//        ]
//    ],
);

$navDesktop = array_merge(
    $headerNav,
    [
        'main' => [
            '/',
            '<img src="/images/logo-small.svg" alt="HOSTMAX" />',
            'Раскрутка сайта',
            'menu-item-main-page'
        ]
    ],
    $headerNav2,
    [
        'phone' => [
            'tel:'.$phoneNumberClear,
            $phoneNumber,
            $phoneNumber,
            'menu-item-phone'
        ]
    ]
);

?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <base href="https://www.hmx.ru/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= \CHtml::encode($headTitle) ?></title>
    <meta name="description" content="<?= \CHtml::encode($headDescription) ?>">
    <meta name="keywords" content="<?= \CHtml::encode($headKeywords) ?>">

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <meta name='yandex-verification' content='4922c9bb04217da5' />
    <meta name="google-site-verification" content="Rs6OaE8saqG5Cl49oDG7i1pBUssbPI9wANNRzwa0S78" />
    <meta name='wmail-verification' content='fb376c803439ae080cf7cb902fe3ea04' />
    <meta name="robots" content="noyaca"/>
    <meta property="og:title" content="<?= \CHtml::encode($headTitle) ?>"/>
    <meta property="og:description" content="<?= \CHtml::encode($headDescription) ?>"/>
    <meta property="og:image" content="https://www.hmx.ru/images/500.png">

    <link href="/css/style.new.css?1" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/app.js"></script>
    <link href="/favicon.ico" rel="shortcut icon">

</head>
<body class="body body__page">

<header id="page-header">
    <nav id="header-menu-mobile" class="navbar navbar-light bg-light">
        <div class="navbar-brand">
            <a class="logo" href="/"><img src="/images/logo-small.svg" alt="HOSTMAX" /></a>
        </div>
        <div class="navbar-text"><a href="tel:<?=$phoneNumberClear?>" class="phone ya-phone"><?=$phoneNumber?></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <hr>
            <ul class="navbar-nav">
                <?php foreach ($navMobile as $itemKey => $item) { ?>
                    <?php $isSelected = !empty($this->getSelectedMenuItem())
                        ? $itemKey === $this->getSelectedMenuItem()
                        : $itemKey === $this->getId(); ?>
                    <li class="nav-item <?= $item[3] ?><?php if ($isSelected): ?> active<?php endif; ?>">
                        <?php if ($isSelected) : ?>
                            <span class="nav-link"><?= $item[1] ?></span>
                        <?php else : ?>
                            <a href="<?= $item[0] ?>"
                               class="nav-link"
                            ><?= $item[1] ?></a>
                        <?php endif ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <div class="container">
        <nav id="header-menu">
            <ul>
                <?php foreach ($navDesktop as $itemKey => $item) { ?>
                    <?php $isSelected = $itemKey === $this->getSelectedMenuItem(); ?>
                    <?php $isThisItemMain = $itemKey === 'main' && $this->getSelectedMenuItem() === 'index'; ?>
                    <li class="<?= $item[3] ?><?= $isSelected ? ' active' : '' ?><?= $isThisItemMain ? ' menu-item-main-page-active' : ''?>">
                        <?php if ($isSelected) : ?>
                            <span><?= $item[1] ?></span>
                        <?php else : ?>
                            <a href="<?= $item[0] ?>"
                               class="headerNav__itemLink"
                               <?= !empty($item[2]) ? 'title="'.htmlspecialchars($item[2]).'"' : '' ?>
                            ><?= $item[1] ?></a>
                        <?php endif ?>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</header>

<div id="page-body" class="container max-width-md">
    <?= $content ?>
</div>

<?php
$footerNav = $headerNav;
?>
<footer id="page-footer">
    <div class="container max-width-md">
        <div class="row line">
            <div class="col-sm-6 col-md-4">
                <img class="logo" src="../images/footer-logo.svg" alt="Дичный бренд от Hostmax." />
                <div class="copyright">&#169; Hostmax 2000–<?= date('Y') ?></div>
                <a href="<?= Yii::link()->site(UrlManager::SITE_ACTION_MAP) ?>">Карта сайта</a>
                <ul>
                	<li>
                	<a href="/politikaconf.pdf" rel="nofollow">Политика конфиденциальности</a>
                	</li>
                	<li>
                	<a href="/contacts.html">Контакты</a>
                	</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4">
                <ul>
                    <?php foreach ($footerNav as $item) { ?>
                        <li>
                            <a href="<?= $item[0] ?>" rel="nofollow"><?= $item[2] ?></a>
                        </li>
                    <?php } ?>
                    <?php foreach ($headerNav2 as $itemKey => $item) { ?>
                        <li>
                            <a href="<?= $item[0] ?>" rel="nofollow"><?= $item[1] ?></a>
                        </li>
                    <?php } ?>
                </ul>

                <ul>
                    <li>
                        <a href="<?= Yii::link()->wiki() ?>" rel="nofollow">Термины личного бренда</a>
                    </li>
                    <li>
                        <a href="<?= Yii::link()
                            ->answers() ?>" rel="nofollow">Вопросы и ответы</a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="contact">
                    <div class="contact-title">Звоните нам</div>
                    <div>Москва: <a href="tel:<?=$phoneNumberClear?>" class="ya-phone"><?=$phoneNumber?></a></div>
                    <div></div>
                    <br>
                </div>

                <div class="contact">
                    <div class="contact-title">Отправьте нам сообщение</div>
                    <div>По е-mail
                        <a href="mailto:hmx@hmx.ru" class="underline">hmx@hmx.ru</a>
                    </div>
                    <!-- <div class="footer__contactLine">или <a class="footer__contactLink" href="javascript:jivo_api.open();">через
                                                                                                                           форму
                                                                                                                           на
                                                                                                                           сайте</a> -->
                </div>
            </div>
        </div>
    </div>
</footer>


<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=R6N7NzeZmBeoW2hMHeR*3ku4N*BxnHwW3*I1H6lboEKGsQxM*K7WFqKD0JSDsGSmCCPykyZl58sBbpsM4ZYeIvYmOeT4ZBdmsgwN*Lz1qKrPGoG16g*ms6vV36bKq29REIHw36Tnolq0fBPpWLNG4AKpPp7JCVm*4t02UO8CsrY-';</script>

<?/*
<!-- popup_active - active Class -->
<div class="popup body__popup">
    <div class="popup__cover">
        <div class="popup__body">
            <div class="feedback">
                <div class="feedback__title">Новое сообщение</div>
                <textarea class="feedback__textarea" placeholder="Ваше сообщение"></textarea>
                <input class="feedback__field" placeholder="Ваш e-mail для обратной связи"/>
                <input type="button" class="button feedback__button" value="Отправить"/>
            </div>
        </div>
        <span class="popup__close"></span>
    </div>
</div>

<div class="popup body__popup">
    <div class="popup__cover">
        <div class="popup__body">
            <div class="feedback">
                <div class="feedback__message">
                    Спасибо за ваше сообщение.<br/>
                    Мы скоро свяжемся с вами.
                </div>
            </div>
        </div>
        <span class="popup__close"></span>
    </div>
</div>
*/?>
<?php
if ($this->getYandexMetrikaCounter()) {
    $this->renderPartial('//layout/widgets/yandexMetrika', ['counterId' => $this->getYandexMetrikaCounter()]);
}

if ($this->getGoogleAnalyticsCounter()) {
    $this->renderPartial('//layout/widgets/googleAnalytics', ['counterId' => $this->getGoogleAnalyticsCounter()]);
}

if ($this->getJivositeWidgetId()) {
    $this->renderPartial('//layout/widgets/jivosite', ['widgetId' => $this->getJivositeWidgetId()]);
}
?>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+79218664882", // WhatsApp number
            call_to_action: "Напишите нам в WhatsApp", // Call to action
            position: "right", // Position may be 'right' or 'left'
            pre_filled_message: "Здравствуйте. Меня интересует личный бренд", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<script> setTimeout(function() { yaCounter1798900.reachGoal("time_solomka"); }, 60000); // 1 минута </script>
</body>
</html>
