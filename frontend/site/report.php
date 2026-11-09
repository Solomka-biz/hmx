<?php
/**
 * @var $this SiteController
 */
$this->setHeadTitle('Умное продвижение сайтов. Услуги по раскрутке - HMX.ru');
$this->setHeadDescription('Услуги по продвижению сайтов: как мы раскручиваем сайты, какие этапы работ по продвижению мы проводим.');
$this->setHeadKeywords('умное продвижение сайта, услуги по продвижению сайта, услуги по раскрутке сайтов');

$selectedMenuItem = UrlManager::SITE_ACTION_FOR_CLIENTS;
$this->setSelectedMenuItem($selectedMenuItem);
?>
		<div class="body__main main">

			<div class="main__header">
				<h1 class="main__largeTitle">Как&nbsp;мы&nbsp;работаем</h1>
				<div class="main__title">
					Секрет успешной раскрутки сайта — <br />в согласованной стратегии работ.
				</div>
			</div>

			<div class="main__inner main__inner_page">
				<div class="page">
					<div class="page__header">
						Здесь хочется написать о том, что мы разработали собственную уникальную методику продвижения сайтов,<br>
                        благодаря которой можем делать это очень быстро и недорого.
					</div>

					<div class="page__seo seo">
                        <h2 class="main__semiTitle2">Начало работы и первые результаты</h2>
						<div class="seo__block">
							<img src="images/optimisation.svg" class="seo__pic" />
							<div class="seo__right">
								<div class="seo__name">Оптимизация сайта</div>
								<div class="seo__description">
									Для того, чтобы сайт эффективно индексировался поисковыми системами, он должен отвечать определённым правилам. Мы сделаем все необходимые изменения, чтобы ваш сайт им соответствовал. Для этого нам может потребоваться улучшить структуру сайта, оптимизировать контент, изменить вёрстку существующих страниц и создать новые.
								</div>
							</div>
						</div>
						<div class="seo__block">
							<img src="images/links.svg" class="seo__pic seo__pic_links" />
							<div class="seo__right">
								<div class="seo__name">Работа над внешними факторами</div>
								<div class="seo__description">
									Интернет — единая взаимосвязанная среда, и поисковые системы учитывают ссылки на ваш сайт при расчёте позиции в поиске. Поэтому так важно провести работу с внешними источниками переходов на ваш сайт, обеспечив нужный объем ссылочной массы.
								</div>
							</div>
						</div>
						<div class="seo__block">
							<img src="images/ads.svg" class="seo__pic" />
							<div class="seo__right">
								<div class="seo__name">Контекстная реклама</div>
								<div class="seo__description">
									Часто для эффективного продвижения необходимо поддержать оптимизацию сайта контекстной рекламой. Мы подберём наиболее эффективные слова и возьмём на себя управление контекстной рекламой в системах Яндекс и Google.
								</div>
							</div>
						</div>
						<h2 class="main__semiTitle2">Закрепление результатов</h2>
						<div class="seo__block">
							<img src="images/audit2.svg" class="seo__pic" />
							<div class="seo__right">
								<div class="seo__name">Аудит вашего сайта <br />и анализ ситуации на рынке</div>
								<div class="seo__description">
									В первую очередь, мы проводим аудит вашего сайта, исследуем ситуацию на рынке и подбираем оптимальную стратегию раскрутки. Это позволяет уточнить сроки и стоимость работ, и сделать вам коммерческое предложение. Если вас всё устраивает, мы заключаем договор и приступаем к работе.
								</div>
							</div>
						</div>
						<div class="seo__block">
							<img src="images/work.svg" class="seo__pic" />
							<div class="seo__right">
								<div class="seo__name">Оптимизация</div>
								<div class="seo__description">
									После заключения договора, мы запрашиваем у вас доступ к вашему сайту, и начинаем работу по оптимизации всех поисковых факторов. Мы постоянно отслеживаем динамику показателей, чтобы оперативно корректировать свои действия.
								</div>
							</div>
						</div>
						<div class="seo__block">
							<img src="images/reports.svg" class="seo__pic" />
							<div class="seo__right">
								<div class="seo__name">Ежемесячные отчёты</div>
								<div class="seo__description">
									Каждый месяц мы предоставляем вам отчёт о результатах оптимизации. В отчёте вы увидите изменения позиций вашего сайта по всем ключевым словам, количество переходов и посетителей. На основе отчёта мы можем при необходимости обсудить дальнейшую стратегию продвижения.
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
