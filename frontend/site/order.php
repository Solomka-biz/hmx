<?php
/**
 * @var $form OrderForm
 */
$this->setHeadTitle('Заказать продвижение сайта. Заказ недорогой раскрутки сайтов в Москве - HMX.ru');
$this->setHeadDescription('Здесь вы можете заказать продвижение вашего сайта в поисковых системах в Москве. Заказ раскрутки сайта он-лайн за 15 000 руб.');
$this->setHeadKeywords(
    'заказ продвижения сайта,заказ раскрутки сайтов,заказать раскрутку сайта,заказать раскрутку сайтов,заказать раскрутку'
);
$selectedMenuItem = UrlManager::SITE_ACTION_ORDER;
$this->setSelectedMenuItem($selectedMenuItem);
?>
<link rel="canonical" href="https://www.hmx.ru/zakaz.html"/>
<div class="body__main main">

    <div class="main__header">
      <h1 class="main__largeTitle_order">Заказать продвижение</h1>
      <div class="main__title_order">
       По фиксированной цене,<br>
	   15 000 руб. в месяц 
     </div>
   </div>

			<div class="main__inner main__inner_pageorder">
				<div class="page">
				
       <div class="descript_order">
      </div>
			
				
      <div class="form__block">
        <div class="form__container order">
		  <br><br><br>
          <div class="order__container">
		  
		  <br><br><br>
		  
            <form class="zakaz" action="<?= \Yii::link()->order() ?>" method="POST">

              <input type="hidden" name="scenario" value="<?= $form->getScenario() ?>">

                    <?php foreach ($form->keywords as $keyword) { ?>
                        <input type="hidden" name="order[keywords][]"
                               value="<?= base64_encode(serialize($keyword)) ?>"/>
                    <?php } ?>
					
                    <?php foreach ($form->hintwords as $keyword) { ?>
                        <input type="hidden" name="order[hintwords][]"
                               value="<?= base64_encode(serialize($keyword)) ?>"/>
                    <?php } ?>
			  
			  <div class="form__input form__input-zakaz form__input-zakaz1">
                <label for="website" class="zakaz__label-1">Адрес вашего сайта</label>
                <input type="text" name="order[url]" value="<?= CHtml::encode($form->url) ?>">
                <span class="form__input-prefix zakaz__site-prefix">http://</span>
              </div>

              <p class="form__havent"><a href="/sitefree.html">У меня еще нет сайта</a></p>

              <div class="form__input form__input-zakaz form__input-zakaz2">
                <label for="email" class="zakaz__label-2" >Ваше имя</label>
                <input type="text" name="order[name]" value="<?= CHtml::encode($form->name) ?>">
				<span class="mainForm__errors"><span class="mainForm__errors_right">
                        <?php if ($form->hasErrors('name')) { ?>
                            <?= $form->getError('name') ?>
                        <?php } ?>
                        </span></span>
              </div>

              <div class="form__input form__input-zakaz form__input-zakaz2">
                <label for="email" class="zakaz__label-3" >E-mail</label>
                <input type="text" name="order[email]" value="<?= CHtml::encode($form->email) ?>">
				<span class="mainForm__errors"><span class="mainForm__errors_right">
                        <?php if ($form->hasErrors('email')) { ?>
                            <?= $form->getError('email') ?>
                        <?php } ?>
                        </span></span>
              </div>

              <div class="form__input form__input-zakaz form__input-zakaz2">
                <label for="email" class="zakaz__label-4" >Телефон</label>
                <input type="text" name="order[phone]" value="<?= CHtml::encode($form->phone) ?>">
                <span class="form__input-prefix zakaz__phone-prefix">+7</span>
				<span class="mainForm__errors"><span class="mainForm__errors_right">
                        <?php if ($form->hasErrors('phone')) { ?>
                            <?= $form->getError('phone') ?>
                        <?php } ?>
                        </span></span>
              </div>
			  
			  <input type="hidden" value="Заказ продвижения за 15 000 руб. со страницы заказа" name="order[massage]" >
			  
			  <div style="color: #ff5555">
                        <?php if ($form->hasErrors('url')) { ?>
                            <?= $form->getError('url') ?>
                        <?php } ?>
              </div>


              <input type="submit" value="Отправить" onclick="yaCounter1798900.reachGoal('ORDERZAKAZ'); return true;" class="form__submit zakaz__submit">
            </form>


          </div>
        </div>
      </div>
	  
	 <div class="main__title_order">
       Или позвоните нам по телефону:<br>
       <br> +7 (495) 664-23-90
     </div>

	  <div class="descript">
				<!--<br><br><br>	
		<h2 class="clients__title h2title">Истории успеха</h2>


<div class="clients__item1">
  <p class="clients__img-title">Веб IT<br>компания</p>
  <svg version="1.1" class="clients__pic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  width="231px" height="85px" viewBox="0 0 231 85" xml:space="preserve">
  <style type="text/css">
  .st5{fill:#F15A24;}
</style>
<path class="st5" d="M231,85H0l27.6-42.5L0,0h231V85z"/>
</svg>
<p class="clients__header">Фабрика сайтов<br> <span>www.fabricasaitov.ru</span></p>
<div class="clients__descr">
  Сайт выведен в топ по всему семантическому ядру, в том числе по самым важным для компании запросам: создание сайтов, разработка сайтов, изготовление сайтов итп. Посещаемость выросла до 1,5 тысяч посетителей в день.
</div>
<div class="clients__review">У компании ХостМакс, пожалуй, лучшее соотношение цены и качества на SEO услуги. Акцент делается на скорости продвижения без потери качества. С позволения руководства некоторые бизнес процессы ООО Хостмакс были успешно применены в нашей компании. Еще для нас очень важно, что результат продвижения не теряется с годами, наш сайт в топовых позициях поисковиков уже более 7 лет.</div>
<img class="clients__trian" src="images/triangle.svg" alt="">
<img class="clients__foto" src="images/reviews/dz.png" alt="Дмитрий Захарьев">
<p class="clients__names  clearfix">Дмитрий<br>Захарьев<span>генеральный<br>директор</span></p>

</div>


<div class="clients__item1">
  <p class="clients__img-title">строительная<br>компания</p>
  <svg version="1.1" class="clients__pic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  width="231px" height="85px" viewBox="0 0 231 85" xml:space="preserve">
  <style type="text/css">
  .st5{fill:#F15A24;}
</style>
<path class="st5" d="M231,85H0l27.6-42.5L0,0h231V85z"/>
</svg>
<p class="clients__header">Архитоника<br> <span>www.arhitonika.ru</span></p>
<div class="clients__descr">
  Реализовано несколько стратегий продвижения сайта, от раскрутки по названиям брендов предлагаемой продукции, до продвижения всех товарных позиций интернет магазина. Отдельно выделено направление, затрагивающее рынок дизайнеров и строительных компаний.
</div>
<div class="clients__review">Поделюсь своим опытом сотрудничества с ХостМакс: команда профессионалов в своей области, с самого начала разработали эффективную стратегию продвижения, выявили недостатки сайта, спроектировали все необходимые изменения в структуре. После этого провели все необходимые работы по оптимизации. Результаты их работы сразу ощущаются на количестве посетителей и соответственно заказчиках. Очень рекомендую!</div>
<img class="clients__trian" src="images/triangle.svg" alt="">
<img class="clients__foto" src="images/reviews/popov1.png" alt="Андрей Попов">
<p class="clients__names  clearfix">Андрей<br>Попов<span>руководитель<br>компании</span></p>

</div>


<div class="clients__item2">
  <p class="clients__img-title">интернет магазин<br>фейерверков</p>
  <svg version="1.1" class="clients__pic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  width="231px" height="85px" viewBox="0 0 231 85" xml:space="preserve">
  <style type="text/css">
  .st6{fill:#F15A24;}
</style>
<path class="st6" d="M231,85H0l27.6-42.5L0,0h231V85z"/>
</svg>
<p class="clients__header">Фейерверкин<br> <span>www.feerverkin.ru</span></p>
<div class="clients__descr">
  Классическое продвижение регионального интернет-магазина по основным словам (фейерверки, салюты, петарды) и большому количеству средне и низкочастотных ключевых запросов. В том числе по названиям категорий магазина и всем товарным позициям.
</div>
<div class="clients__review">Хочу сказать огромное СПАСИБО команде HMX.ru! Я пришел сюда с новым сайтом, естественно его небыло видно нигде, заказов небыло, звонков тоже. Ребята оперативно подобрали ключевые слова по моей тематике и раскрутили сайт в Интерете. Через месяц у меня появились ТОПовые позиции в Google.com, а еще через пару недель мой сайт feerverkin.ru стал занимать лидирующие позиции и в Yandex.ru. Сейчас по всем ключевым словам мой сайт на первых страницах поисковиков в Санкт-Петербурге! Это очень позитивно сказалось на продажах.
Особенно приятно, что когда я решил делать ре-дизайн сайта, меня не оставили один на один с проблемой, а помогли советами и рекомендациями - как не потерять позиции при обновлении.</div>
<img class="clients__trian" src="images/triangle.svg" alt="">
<img class="clients__foto" src="images/reviews/2.jpg" alt="">
<p class="clients__names  clearfix">Илья<br>Жуков<br><span>основатель<br>компании</span></p>
</div>

<div class="clients__item3">
  <p class="clients__img-title">торговая площадка,<br>социальная сеть</p>
  <svg version="1.1" class="clients__pic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  width="231px" height="85px" viewBox="0 0 231 85" xml:space="preserve">
  <style type="text/css">
  .st7{fill:#F15A24;}
</style>
<path class="st7" d="M231,85H0l27.6-42.5L0,0h231V85z"/>
</svg>
<p class="clients__header">Репка<br> <span>www.repka.ru</span></p>
<div class="clients__descr">
  Была разработана и внедрена стратегия продвижения сайта в Москве и регионах, с созданием для каждого города России (всего 140 регионов) отдельного поддомена. Сейчас сайт собирает более 5 млн. просмотров ежемесячно.
</div>
<div class="clients__review">Обратились к компании Хостмакс еще на стадии разработки нашего стартапа. Не верили что получится, но решили попробовать. Результаты же превзошли все наши ожидания. Мы на первых местах везде где только можно. Поток посетителей вырос на 700%. Не успеваем обрабатывать заказы. Это успех!</div>
<img class="clients__trian" src="images/triangle.svg" alt="">
<img class="clients__foto" src="images/reviews/vf.png" alt="">
<p class="clients__names  clearfix">Валентин<br>Филиппов<br><span>основатель<br>проекта</span></p>
</div>


<div class="clients__item3">
  <p class="clients__img-title">Деловой<br>бизнес журнал</p>
  <svg version="1.1" class="clients__pic" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  width="231px" height="85px" viewBox="0 0 231 85" xml:space="preserve">
  <style type="text/css">
  .st7{fill:#F15A24;}
</style>
<path class="st7" d="M231,85H0l27.6-42.5L0,0h231V85z"/>
</svg>
<p class="clients__header">Человек дела<br> <span>www.chief-time.ru</span></p>
<div class="clients__descr">
  Продвижение сайта федеральной сети бизнес изданий велось в Москве и в нескольких регионах. При достаточно высокой конкуренции удалось получить топовые результаты по самым популярным запросам в поисковых системах.
</div>
<div class="clients__review">Замечательная компания, индивидуальный подход, чуткие менеджеры. Спасибо Андрею Сергееву. Смогли договориться о частичной оплате услуг на бартерной основе, что крайне важно для любого информационного издания.</div>
<img class="clients__trian" src="images/triangle.svg" alt="">
<img class="clients__foto" src="images/reviews/tc.png" alt="">
<p class="clients__names  clearfix">Тимофей<br>Кареба<br><span>основатель<br>журнала</span></p>
</div> -->
	  

	  
        <?= $this->renderPartial('//layout/_mainNav') ?>
		
      </div>
	  </div>
</div>