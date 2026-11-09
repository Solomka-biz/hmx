<?php
/**
 *
 */
$person_img = '/images/7.png';
$person_name = 'Сергей';
?>
<div class="dialog main__dialog i-bem" onclick="return {'dialog': {}};">

 <!--   <div class="message dialog__post">
        <div class="message__person"></div>
        <div class="message__body message__body_gray message__body_right dialog__container" style="display: block;">Скажите пожалуйста, что вы будете делать в первые бесплатные 7 дней? Как я смогу понять, что вы все хорошо сделали за такой короткий срок?</div>
    </div>


    <div class="message dialog__post">
        <div class="message__person">
            <img src="<?= $person_img ?>" class="message__photo">
            <div class="message__name"><?= $person_name ?></div>
        </div>
        <div class="message__body message__body_blue message__body_left">
            Здравствуйте! <br>Первые звонки от ваших клиентов вы начнете получать уже на следующий рабочий день. А в течение беплатной недели их будет достаточно, чтобы принять решение о дальнейшем сотрудничестве.<br></div>
    </div> -->

    <div class="message dialog__post">
        <div class="message__person"></div>
        <div class="message__body message__body_gray message__body_right dialog__container" style="display: block;">У вас написано, что вы предоставляете финансовые гарантии на результат. Можете пояснить, что это значит?</div>
    </div>

    <div class="message dialog__post">
        <div class="message__person">
            <img src="<?= $person_img ?>" class="message__photo">
            <div class="message__name"><?= $person_name ?></div>
        </div>
        <div class="message__body message__body_blue message__body_left">
            Добрый день! <br>Да, все правильно. Мы гарантируем результаты своей работы и это указано в договоре. Если мы не достигли прогнозируемых результатов, то вы их не оплачиваете. <br></div>
    </div>

    <div class="message dialog__post">
        <div class="message__person"></div>
        <div class="message__body message__body_gray message__body_right dialog__container" style="display: block;">Если я сейчас отправлю заказ, когда вы начнете работу с моим сайтом?</div>
    </div>

    <div class="message dialog__post">
        <div class="message__person">
            <img src="<?= $person_img ?>" class="message__photo">
            <div class="message__name"><?= $person_name ?></div>
        </div>
        <div class="message__body message__body_blue message__body_left">Мы начнем работать сразу же после того, как получим ваш заказ и наш менеджер узнает у вас все ваши пожелания. Обычно на это уходит не более 24 часов.</div>
    </div>
<br>
<h2 class="main__semiTitle">Задать вопрос</h2>
<br><br>
    <div class="message dialog__post">
        <div class="message__person">
            <img src="<?= $person_img ?>" class="message__photo" />
            <div class="message__name"><?= $person_name ?></div>
        </div>
        <div class="message__body message__body_blue message__body_left">
            Здравствуйте! <br />
            Буду рад ответить на любые ваши вопросы <br />
            <?= $question_about ?>
        </div>
    </div>
    <div class="message dialog__post">
        <div class="message__person"></div>
        <div class="message__body message__body_gray message__body_right dialog__container">
            <form action="/feedback" class="message__form dialog__form" method="post">
                <div class="form-group">
                    <textarea class="form-control message__textarea dialog__message" placeholder="Ваш вопрос" rows="5" name="feedback[message]"></textarea>
                    <div class="message__note dialog__error dialog__error_message dialog__error_state_hidden"></div>
                </div>
                <div class="form-group">
                    <input type="text" name="feedback[phone]" class="form-control message__field" placeholder="Ваш телефон для связи" />
                    <div class="message__note dialog__error dialog__error_phone dialog__error_state_hidden"></div>
                </div>
                <?php if (!empty($from_text)) : ?>
                <input type="hidden" value="<?= $from_text ?>" name="feedback[url]">
                <?php endif ?>
                <div class="button-wrapper">
                    <button type="submit" onclick="<?php if (!empty($reach_goal)) : ?>yaCounter1798900.reachGoal(<?= $reach_goal ?>); <?php endif ?>return true;" class="btn btn-message button button_middle message__button">Отправить</button>
                </div>
            </form>
        </div>
    </div>
    <div class="message dialog__post dialog__answer">
        <div class="dialog__answerMessage">
            <div class="message__person">
                <img src="<?= $person_img ?>" class="message__photo" />
                <div class="message__name"><?= $person_name ?></div>
            </div>
            <div class="message__body message__body_blue message__body_left">
                Спасибо за ваш вопрос! <br />
                Мы перезвоним вам в ближайшее время.
            </div>
        </div>
    </div>
</div>
