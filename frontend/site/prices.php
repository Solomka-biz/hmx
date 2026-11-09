<?php
/**
 * @var $this SiteController
 */
$this->setHeadTitle('Цены на создание и продвижение личного бренда - HMX.ru');
$this->setHeadDescription('Узнайте стоимость упаковки и развития личного бренда для предпринимателей и экспертов.');
$this->setHeadKeywords(
    'цены на личный бренд, стоимость личного бренда'
);

$selectedMenuItem = UrlManager::SITE_ACTION_PRICES;
$this->setSelectedMenuItem($selectedMenuItem);
?>

<div class="body__main main">

    <div class="main__header">
        <h1 class="main__largeTitle">Сроки и цены</h1>
        <div class="main__title">
            Создадим и продвинем ваш личный бренд<br> за 1 год за 3 млн ₽
        </div>
    </div>

    <div class="main__inner">
        <div class="page">
            <div class="page__prices prices">
                <div class="prices__block">
                        <div class="prices__description">
Инвестиция в личный бренд решает главные проблемы публичных людей:
<br><br>
<ul  style="list-style: inherit;">
<li> Системный рост вместо хаоса<br>
Вы получаете четкий план, который объединяет все каналы продвижения — от соцсетей и СМИ до публичных выступлений. Больше никакой рутины и спонтанных действий.<br><br></li>
<li> Узнаваемость, которую можно измерить<br>
Мы работаем на конкретный результат: рост упоминаний в медиа, приглашения на статусные мероприятия, увеличение стоимости ваших услуг и прямые заявки от клиентов.<br><br></li>
<li> Единая команда вместо поиска фрилансеров<br>
Вам не нужно искать отдельных специалистов по SMM, копирайтера, PR-менеджера и пиарщика. Всю работу берет на себя слаженная команда под одним руководством.<br><br></li>
<li> Ваша экспертность — наш контент<br>
Мы берем на себя всю работу с контентом: создаем убедительные тексты, готовим вас к выступлениям, ведем соцсети и обеспечиваем ваше присутствие в нужных СМИ.<br></li>
</ul>
Вы можете быть уверены в результате, потому что мы работаем по договору с четкими KPI. За 3 млн ₽ вы получаете готовый, работающий личный бренд, созданный за 1 год. </div> 
</div></div>

<!--
<div class="form__block">
            <div class="form__container">
                <form action="<?= \Yii::link()->order() ?>" method="POST">
                    <div class="form__header">Отправьте нам заявку прямо сейчас
                    </div>

                    <div class="form__input">
                        <label for="name" class="form__label-3">Ваше имя</label>
                        <input type="text" name="order[name]">
                    </div>

                    <div class="form__input">
                        <label for="email" class="form__label-2">Контакт для связи</label>
                        <input type="text" name="order[email]" placeholder="Ваш телефон или e-mail">
                    </div>
                    <input type="hidden" value="Заказ продвижения со страницы о ценах" name="order[massage]">

                    <input type="submit" value="Отправить" class="form__submit btn btn-success" onclick="yaCounter1798900.reachGoal('ORDERINDEX'); return true;">
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
                    <div class="form__header">Отправьте нам заявку прямо сейчас</div>
<input type="hidden" name="manager_id" value="0">
<input type="hidden" name="pipeline_id" value="7">
<input type="hidden" name="source_id" value="5">
<input type="hidden" name="name" value="Заявка с HMX.ru - странцы с ценами">
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




            <h2 class="main__semiTitle">Ответы на вопросы</h2>
            <br><br>
            <?= $this->renderPartial('//layout/_feedback_order') ?> 
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
