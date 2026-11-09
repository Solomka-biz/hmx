<?php
/**
 * @var $this          SiteController
 * @var $analyzerError boolean
 */

$this->setHeadTitle('Личный бренд. Упаковка, создание, развитие и продвижение личного бренда под ключ.');
$this->setHeadDescription('Ваш личный бренд поможет зарабатывать больше. Закажите создание личного бренда у профессионалов.');
$this->setHeadKeywords('личный бренд, создание личного рейда, продвижение личного бренда');

$selectedMenuItem = UrlManager::SITE_ACTION_INDEX;
$this->setSelectedMenuItem($selectedMenuItem);

\Yii::clientScript()->registerPackage('app.pages.main');
?>
<link rel="canonical" href="https://www.hmx.ru" />
<div class="body__main main">

    <div class="main__header main__header_index">
        <img class="d-none d-md-inline-block" src="/images/logo-big.svg" alt="Личный бренд">
        <h1 class="main__title">Личный бренд</h1>
    </div>

    <div class="main__inner">


        <div class="benefits main__benefits">
            <div class="benefits__wrap row">
                <div class="col-sm-4 benefits__item">
                    <img src="images/1-comlete.svg" alt="Выгодно" class="benefits__icon benefits__icon_comlete">
                    <div class="benefits__title">Выгодно</div>
                    <div class="benefits__text">
                        Лучшие цены<br>
                        на упаковку<br>
                        личного бренда.<br>
                    </div>
                </div>
                <div class="col-sm-4 benefits__item">
                    <img src="images/start.svg" alt="Масштабно" class="benefits__icon benefits__icon_start" style="
    margin-bottom: 3px;">
                    <div class="benefits__title">Масштабно</div>
                    <div class="benefits__text">
                        Сделаем ваш <br>
                        личный бренд <br>
                        известным.<br>
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
    Создадим <br><span class="text__yell">ваш личный бренд под ключ</span><br> упакуем, поможем с развитием и продвижением.
            </div>
        </div>
<br><br><br>
<!--
        <div class="form__block">
            <div class="form__container">
                <form action="<?= \Yii::link()->order() ?>" method="POST">
                    <div class="form__header">Интересно? Мы пришлём вам
предложение в течение 24-х часов</div>

                    <div class="form__input">
                        <label for="name" class="form__label-3">Ваше имя</label>
                        <input type="text" name="order[name]">
                    </div>


                    <div class="form__input">
                        <label for="email" class="form__label-2">Контакт для связи</label>
                        <input type="text" name="order[email]" placeholder="Ваш номер телефона">
                    </div>

                    <input type="hidden" value="Заказ продвижения с 1 формы главной страницы" name="order[massage]">

                    <input type="submit" value="Отправить" class="form__submit btn btn-success" onclick="yaCounter1798900.reachGoal('COMPREDINDEX'); return true;">
                </form>

            </div>
        </div>
-->

<!-- новая форма -->
<style>
  .leadforms-row-submit { text-align: center; }
  .leadforms-form {width: auto; max-width: none;}
  .flow-img { width: 100%; margin: 0 0 0 -62px; z-index: 4; position: absolute; top: -48px; text-align: center; }
  .leadforms-form input.leadforms-input { height: 38px; }
  .leadforms-form .leadforms-form-title { color: #333; padding-bottom: 22px; }
  .form__label {
    font-weight: 400;
    font-size: 18px;
    line-height: 25px;
    margin-bottom: 0px;}
  .form-checkbox__box {
    border: 1px solid #1C4ADE;}
</style>  

<div class="form__block leadforms-form">
<div class="form__container">
                    <div class="form__header">Интересно? Мы пришлём вам
предложение в течение 24-х часов</div>
<input type="hidden" name="manager_id" value="0">
<input type="hidden" name="pipeline_id" value="7">
<input type="hidden" name="source_id" value="5">
<input type="hidden" name="name" value="Заявка с HMX.ru">
<input type="hidden" id="leadforms_host" value="https://solomka.aspro.cloud/">
<textarea name="nspm" style="display:none !important;"></textarea>
        <div class="leadforms-row">
  <div class="form__input--fragment form__input-group form__input-group--text ">
    <!--  <label class="leadforms-label form__label" for="leadforms_contact_name">Ваше имя</label> -->
      <input type="text" required="required"  id="leadforms_contact_name" name="contact_name" class="leadforms-input form__control" placeholder="Вашt имя">
  </div>
</div>

<br>

<div class="leadforms-row">
  <div class="form__input--fragment form__input-group form__input-group--text ">
     <!-- <label class="leadforms-label form__label" for="leadforms_contact_phone">Телефон</label> -->
      <input type="text" required="required"  id="leadforms_contact_phone" name="contact_phone" class="leadforms-input form__control" placeholder="Ваш номер телефона">
  </div>
</div>

<br>

<div class="leadforms-row leadforms-checkbox-block">
  <div class="form__input--fragment form__input-group form__input-group--checkbox ">
      <div class="form-checkbox form-checkbox--color-primary" data-set-unique-id>
          <input type="checkbox" id="leadforms_privacy" required name="leadforms_privacy" value="ok" class="form__control form-input-box__input form-checkbox__input leadforms-form-input-privacy">
          <label class="form-input__label  form__label leadforms-label" for="leadforms_privacy"  id="leadforms_privacy_label">Я согласен на обработку персональных данных</label>
          <span class="form-input-box__box form-checkbox__box">
            <svg width="14" height="16" class="form-checkbox__check">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7071 3.29289C15.0976 3.68342 15.0976 4.31658 14.7071 4.70711L6.70711 12.7071C6.31658 13.0976 5.68342 13.0976 5.29289 12.7071L1.29289 8.70711C0.902369 8.31658 0.902369 7.68342 1.29289 7.29289C1.68342 6.90237 2.31658 6.90237 2.70711 7.29289L6 10.5858L13.2929 3.29289C13.6834 2.90237 14.3166 2.90237 14.7071 3.29289Z" />
            </svg>
          </span>
      </div>
  </div>
</div>

<div class="leadforms-notification"></div>
  
<div class="leadforms-row leadforms-row-submit"><button class="form__submit btn btn-success leadforms-submit">Отправить</button></div>
</div>
</div>
<!-- конец новой формы -->

<!-- скрипт новой формы -->
<script type="text/javascript">(function(w, d, c) { (w[c] = w[c] || []).push(function(leadformsHost) { try { new FlowluForm.init({ id: '88215' , token : 'a3bf7b3afd307db82a3e3b1f8d8df59d', host: leadformsHost }); } catch (e) {} }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function() { n.parentNode.insertBefore(s, n); s.onload = function() { addStyleToPage(); }; }; s.type = "text/javascript"; s.async = true; s.src = "https://solomka.aspro.cloud/application/classes/Module/Webforms/static/js/ext-form.js?v=" + Date.now(); if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { d.addEventListener("DOMContentLoaded", f, false); } })(window, document, "leadforms_forms");</script>
<script>
    var forms = document.querySelectorAll('form.mbr-form');

    if (forms.length > 0) {
        forms.forEach(function(form, key) {

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                var submit = form.querySelector('button[type="submit"]');
                
                var checkNode = document.createElement("input");
                
                checkNode.setAttribute("id", "check-" + key);
                checkNode.setAttribute("name", "check");
                checkNode.setAttribute("type", "hidden");

                if (form != undefined) {
                    form.appendChild(checkNode);
                }

                if (submit != undefined) {
                    var check = form.querySelector('#check-' + key);

                    if (check != undefined) {
                        check.value = 'secretcode';
                    }

                    form.submit();
                }
            });
        });
    }
</script>

<!-- конец скрипта новой формы -->


<!-- блок с текстом 1 -->
        <div class="page__optimiz optimiz" style="
    margin-bottom: 0px;">
            <h2 class="title" style="margin-bottom: 10px;">Вам знакомо это чувство?</h2>
        </div>
<div class="page__prices prices">
                <div class="prices__block">
                        <div class="prices__description">
<ul style="list-style: inherit;">
<li> Вы — профессионал высочайшего уровня, но о вас знают лишь в узком кругу</li>
<li> Ваш бизнес теряет клиентов на фоне более "раскрученных" конкурентов, даже если ваше предложение лучше</li>
<li> Вы тратите огромные деньги на контекстную рекламу, которая не приводит к лояльным клиентам</li>
<li> Вас не приглашают выступать на крупные площадки и не пишут о вас в СМИ</li>
<li> Вы не можете назначать достойную цену за свои услуги, потому что вас "не знают"</li>
</ul>
Пора превратить вашу экспертизу в реальное влияние и финансовый результат 
<br><br></div> 
</div></div>


<!-- блок с текстом 2 -->
        <div class="page__optimiz optimiz" style="
    margin-bottom: 0px;">
            <h2 class="title" style="margin-bottom: 10px;">Личный бренд — это не про хайп. Это про деньги и возможности</h2>
        </div>
<div class="page__prices prices">
                <div class="prices__block">
                        <div class="prices__description">
<ul style="list-style: inherit;">
<li> <b>Узнаваемость и доверие:</b><br> К вам начинают обращаться как к эксперту, а не как к продавцу. Доверие сокращает цикл продаж в 3 раза</li>
<li> <b>Лидогенерация:</b><br> Клиенты и партнеры находят вас сами. Снижаем зависимость от дорогой рекламы</li>
<li> <b>Рост стоимости услуг:</b><br> Обоснуйте цену в 2-3 раза выше рыночной за счет своего имени и репутации</li>
<li> <b>Новые рынки и партнерства:</b><br> Выход на новые аудитории, приглашения на ТВ, в крупные СМИ и на статусные конференции</li>
</ul>
<br><br></div> 
</div></div>

<!-- блок с текстом последний -->
        <?php
        $optimiz_blocks = [];

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Стратегия';
        $b->badge_type = '';
        $b->badge_fill = '#42D5C6';
        $b->title = 'Построение личного бренда';
        $b->description = '
            Построение личного бренда — это важный процесс, который помогает людям выделиться в конкурентной среде, создать свою уникальную идентичность и установить доверительные отношения с аудиторией. <a href="https://solomka.biz/">Личный бренд</a> — это то, как вы представляете себя миру и как вас воспринимают другие. Вот несколько ключевых шагов для успешного построения личного бренда.
<br><br>
1. Определите свою уникальность
<br>
Первый шаг в построении личного бренда — это понимание собственных сильных сторон, умений и ценностей. Что делает вас уникальным? Какие ваши навыки и опыт могут быть полезны другим? Проведите самоанализ, чтобы выявить свои достоинства и слабости. Не бойтесь выделять свои особенности — это поможет вам стать заметным среди множества других.
<br><br>
2. Определите целевую аудиторию
<br>
Важно понимать, для кого вы строите свой бренд. Определите свою целевую аудиторию: кто эти люди, какие у них интересы, потребности и проблемы? Понимание своей аудитории поможет вам адаптировать ваше сообщение, контент и подход к общению.
<br><br>
3. Создайте свою историю
<br>
Люди любят истории. Разработайте свою личную историю, которая будет отражать ваш путь, достижения и ценности. Это поможет вам установить эмоциональную связь с аудиторией. Ваш опыт может вдохновлять и мотивировать других, поэтому делитесь им открыто и искренне.
<br><br>
Построение личного бренда требует времени и усилий, но это инвестиция, которая может принести значительные дивиденды в будущем. Независимо от того, стремитесь ли вы к карьерным успехам, развитию бизнеса или созданию личного влияния, сильный личный бренд станет вашим незаменимым инструментом.

        ';
        $optimiz_blocks[] = $b;


        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Упаковка';
        $b->badge_type = '';
        $b->badge_fill = '#ff9922';
        $b->title = 'Создание личного бренда';
        $b->description = '
            Упаковка и создание личного бренда — это два взаимосвязанных аспекта, которые играют ключевую роль в формировании восприятия вас как специалиста или личности. Упаковка включает в себя визуальные элементы, такие как логотип, цветовая палитра, шрифты и стиль оформления, а также неотъемлемые атрибуты, например, визитные карточки и профиль в социальных сетях. Всё это должно отражать вашу индивидуальность и профессиональные ценности.
<br><br>
Создание личного бренда начинается с ясного понимания своих сильных сторон, уникальных качеств и той аудитории, которой вы хотите донести своё сообщение. Важно определить свою нишу, в которой вы хотите выделяться и быть узнаваемым. Это может быть определённая сфера деятельности, стиль работы или философия подхода к выполнению задач.
<br><br>
При разработке упаковки стоит учитывать, как вы хотите, чтобы вас воспринимали. Визуальные элементы должны гармонировать с вашим образом и поддерживать основное сообщение о вас как о профессионале. Например, если вы стремитесь быть ассоциируемым с креативностью и инновациями, ваша упаковка может включать яркие цвета, нестандартные формы и оригинальные шрифты.
<br><br>
Не менее важно, чтобы ваша упаковка была последовательной на всех платформах. Это создаёт целостный образ и повышает узнаваемость. Все коммуникационные материалы — от сайта до профильных страниц в социальных сетях — должны говорить на одном языке и передавать одинаковую атмосферу.
<br><br>
Важно помнить, что упаковка личного бренда — это не только его визуальная составляющая, но и то, как вы взаимодействуете с окружающими: манера общения, уровень профессионализма и готовность делиться опытом. Эти аспекты также формируют восприятие вашего бренда и оказывают влияние на его развитие.
<br><br>
В итоговом анализе, упаковка и создание личного бренда — это стратегический процесс, который требует времени и вдумчивого подхода. Удачная упаковка делает вас более привлекательным для целевой аудитории и способствует формированию устойчивого имиджа, который будет отличаться от других в вашей сфере.
        ';
        $optimiz_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Развитие';
        $b->badge_type = '';
        $b->badge_fill = '#60d513';
        $b->title = 'Развитие личного бренда';
        $b->description = '
            Развитие личного бренда — это процесс формирования и укрепления уникального образа личности, который отражает ценности, интересы и профессиональные достижения. Он начинается с самопознания и понимания своей индивидуальности. Чтобы создать успешный личный бренд, важно четко осознавать свои сильные стороны, навыки и то, что делает вас уникальным на фоне других.
<br><br>
Первым шагом в развитии личного бренда является определение вашей миссии и видения. Это может быть как профессиональная, так и личная цель, которая будет направлять вашу деятельность. Определив свои цели, необходимо исследовать свою целевую аудиторию, чтобы понять, какие аспекты вашего бренда будут наиболее привлекательны для них.
<br><br>
Следующим этапом является формирование своей идентичности. Это включает в себя создание визуальных атрибутов, таких как логотип, цветовая палитра и стиль оформления, а также разрабатывание уникальной истории, которая будет ассоциироваться с вашим брендом. Ваши ценности и принципы должны проявляться во всех аспектах вашей деятельности и общения.
<br><br>
Создание профессионального имиджа также имеет большое значение. Это включает в себя как развитие навыков и знаний в своей области, так и умение эффективно представлять себя в различных ситуациях. Участие в мероприятиях, семинарах и конференциях поможет вам выстроить сеть контактов и завести полезные знакомства, что будет способствовать укреплению вашего бренда.
<br><br>
Со временем личный бренд должен адаптироваться и развиваться. Важно быть открытым к новым возможностям, учиться на опыте и учитывать изменения в окружающем мире. Регулярное самоанализирование и рефлексия помогут корректировать направление и поддерживать актуальность вашего личного бренда.
<br><br>
В заключение, развитие личного бренда — это многогранный процесс, требующий внимания, времени и усилий. Однако, когда вы создаете искренний и последовательный образ, который отражает вашу индивидуальность и ценности, это приведет к укреплению вашей позиции в профессиональном сообществе и улучшению качества вашей жизни в целом.
        ';
        $optimiz_blocks[] = $b;

        // ---------------------------------------------

        $b = new stdClass();
        $b->badge_text = 'Раскрутка';
        $b->badge_type = '';
        $b->badge_fill = '#af22ff';
        $b->title = 'Продвижение личного бренда';
        $b->description = '
            Продвижение личного бренда — важный шаг на пути к профессиональному успеху и признанию в своей области. Этот процесс включает в себя разнообразные стратегии и методы, которые позволяют заявить о себе и своих компетенциях, установить доверительные отношения с аудиторией и выделиться на фоне конкурентов.
<br><br>
Прежде всего, ключевым элементом продвижения личного бренда является активное присутствие в социальных сетях. Платформы как Instagram, LinkedIn и Twitter предоставляют уникальные возможности для взаимодействия с целевой аудиторией. Важно не только регулярно публиковать посты, но и активно участвовать в обсуждениях, комментировать и делиться мнениями по актуальным темам. Это помогает не только укрепить позицию эксперта, но и привлечь внимание к своему профилю.
<br><br>
Контент-маркетинг — еще одна важная составляющая. Публикация статей, блогов или видео на профессиональные темы, касающиеся вашей сферы, не только демонстрирует вашу экспертизу, но и помогает тебе быть услышанным. Важно, чтобы контент был полезным, интересным и актуальным для вашей аудитории. Гостевые посты на популярных ресурсах или участие в подкастах и вебинарах могут значительно расширить вашу видимость и повысить авторитет.
<br><br>
Участие в мероприятиях, таких как конференции, семинары и мастер-классы, также способствует продвижению личного бренда. Это не только возможность обменяться опытом с коллегами, но и шанс наладить профессиональные связи, которые могут быть полезны в будущем. Личное взаимодействие демонстрирует вашу уверенность и готовность делиться знаниями, что исключительно важно для формирования доверия.
<br><br>
Не стоит забывать и о PR-активностях. Пресс-релизы, интервью и публикации в СМИ могут существенно повысить вашу видимость и создать положительный имидж. Регулярное освещение вашей работы в профессиональных изданиях или медиа может сыграть решающую роль в популяризации вашего бренда.
<br><br>
Важно помнить, что продвижение личного бренда — это не моментальный процесс. Требуется время и последовательность. Необходимо постоянно адаптировать стратегии в зависимости от обратной связи и изменений в интересах аудитории. Верность выбранным целям, креативный подход и упорство обязательно принесут свои плоды, сделав ваш личный бренд заметным и успешным
<br><br>
Доверьте нам создание вашего личного бренда, станьте лидером в интернете и жизни.
        ';
        $optimiz_blocks[] = $b;

        // ---------------------------------------------

        unset($b);
        ?>

        <div class="page__optimiz optimiz">
            <h2 class="title">Как создать личный бренд</h2>

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
                <img class="img" src="images/flag.svg" alt="лидер общественного мнения">
            </div>
        </div>

        <?= $this->renderPartial('//layout/_mainNav') ?>

    </div>
</div>

