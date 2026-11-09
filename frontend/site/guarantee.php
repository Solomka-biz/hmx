<?php
/**
 * @var $this SiteController
 */
$this->setHeadTitle('Раскрутка сайтов гарантии. Раскрутка гарантии - HMX.ru');
$this->setHeadDescription("Раскрутка сайта гарантии. Гарантии на раскрутку - 100%.");
$this->setHeadKeywords("раскрутка гарантии,раскрутка сайта гарантии,раскрутка сайтов гарантии");

$selectedMenuItem = UrlManager::SITE_ACTION_GUARANTEE;
$this->setSelectedMenuItem($selectedMenuItem);
?>
<div class="body__main main">

    <div class="main__header">
        <h1 class="main__largeTitle">Наши гарантии</h1>
    </div>

    <div class="main__inner main__inner_guarantee">
        <div class="welcome">

            <div class="welcome__header">
                Мы&nbsp;Вам гарантируем нахождение Вашего сайта на&nbsp;первой странице поисковой системы Яндекс.<br/>
                Мы&nbsp;добьемся поставленной задачи двумя взаимодополняющими способами: <br/>
                &mdash;&nbsp;раскрутка сайта в&nbsp;поисковых системах. <br/>
                &mdash;&nbsp;контекстная реклама. <br/>
            </div>

            <p class="main__paragraph">


            Пока мы продвигаем (раскручиваем) Ваш сайт в поисковых системах путем оптимизации, внешних и
                    внутренних
                    факторов, редакции текстов и пр., Ваш сайт уже будет на первой страничке выдачи поиска Яндекса
                    благодаря
                    контекстной рекламе по выбранным Вами ключевым словам.
                    Как только результат раскрутки сайта будет достигнут, мы отменим показы контекстных объявлений.
            </p>

            <p class="main__paragraph">

            Если же вдруг случается какой-либо форс-мажор и сайт "уходит" с первой страницы
                    Яндекса,
                    мы вновь включим контекстную рекламу, пока раскрутка не вернет его в ТОП.
                    Таким образом мы постоянно страхуем Ваш бизнес! <br><br>
                    Вы всегда сможете получать клиентов с первой, самой насыщеной клиентами, страницы
                    Яндекса!<br>
                </p>


         <hr class="divider">
		<?= $this->renderPartial('//layout/_feedback_order') ?>

        <?=
        $this->renderPartial(
            '//layout/_mainNav',
            [
                'selectedItem' => $selectedMenuItem
            ]
        ) ?>

        </div>
    </div>
</div>
