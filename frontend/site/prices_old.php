<?php
/**
 * @var $this SiteController
 */
$this->setHeadTitle('Цены на раскрутку сайта. Цена раскрутки сайтов - HMX.ru');
$this->setHeadDescription('Цены на раскрутку. Цены на раскрутку сайтов нашим клиентам.');
$this->setHeadKeywords(
    'цены на раскрутку, цены на раскрутку сайта, цены на раскрутку сайтов, цена раскрутки сайта, цена раскрутки сайтов'
);

$selectedMenuItem = UrlManager::SITE_ACTION_PRICES;
$this->setSelectedMenuItem($selectedMenuItem);
?>
<div class="body__main main">

    <div class="main__header">
        <h1 class="main__largeTitle">Сроки и цены</h1>
				<div class="main__title">
					Обеспечим быстрый рост продаж<br />по цене 15 000 руб. в месяц.
				</div>
    </div>

    <div class="main__inner main__inner_page">
        <div class="page">
            <div class="page__header">
		
            </div>
<div class="seo__title">Сроки</div>
<div class="page__header">
Первые результаты раскрутки вы заметите уже через неделю после начала работ. Но для закрепления позиций сайта потребуется несколько месяцев оптимизации. Поисковые системы не любят резких движений.</div>
<br><br>

					<div class="page__prices prices">
                    <div class="seo__title">Цены</div>
						<div class="prices__block">
							<img src="images/small-site.svg" class="prices__pic" />
							<div class="prices__right">
								<div class="prices__name">Небольшой сайт</div>
								<div class="prices__value">15 000 руб/месяц</div>
								<div class="prices__description">
									При оптимизации небольшого сайта мы сосредотачиваемся на точном подборе ключевых слов и выводу сайта по этим словам на первые позиции в поиске.
								</div>
							</div>
						</div>
						<div class="prices__block">
							<img src="images/big-site.svg" class="prices__pic" />
							<div class="prices__right">
								<div class="prices__name">Крупный сайт</div>
								<div class="prices__value">25 000 руб/месяц</div>
								<div class="prices__description">
									Для крупных сайтов, мы развиваем несколько групп ключевых слов, работаем над контентом, консультируем по вопросам юзабилити.
								</div>
							</div>
						</div>
						<div class="prices__block">
							<img src="images/shop.svg" class="prices__pic" />
							<div class="prices__right">
								<div class="prices__name">Интернет-магазин</div>
								<div class="prices__value">45 000 руб/месяц</div>
								<div class="prices__description">
									При работе над интернет-магазинами, помимо перечисленного мы уделяем много внимания всем страницам с товарами, делая их наиболее привлекательными для поисковых систем.
								</div>
							</div>
						</div>
					</div>
                    
         <hr class="divider">
		<?= $this->renderPartial('//layout/_feedback_order') ?>


        </div>



        <?=
        $this->renderPartial(
            '//layout/_mainNav',
            [
                'selectedItem' => $selectedMenuItem
            ]
        ) ?>

    </div>
</div>
