<?php
/**
*
*/
?>
<div class="dialog main__dialogindex i-bem" onclick="return {'dialog': {}};">
	<div class="message dialog__post">
		<div class="message__person">
			<img src="../images/7.png" class="message__photo" />
			<div class="message__name">Сергей</div>
		</div>
		<div class="message__body message__body_blue message__body_left">
			Здравствуйте! <br />
			Буду рада ответить на любые вопросы <br />
			по раскрутке вашего сайта.
		</div>
	</div>
	<div class="message dialog__post">
		<div class="message__body message__body_gray message__body_right dialog__container">
			<form action="/feedback" class="message__form dialog__form" method="post">
				<textarea class="message__textarea dialog__message" placeholder="Ваш вопрос" rows="5" name="feedback[message]"></textarea>
				<div class="message__note dialog__error dialog__error_message dialog__error_state_hidden"></div>
				<input type="text" name="feedback[phone]" class="message__field" placeholder="Ваш телефон для связи" />
				<div class="message__note dialog__error dialog__error_phone dialog__error_state_hidden"></div>
				<button type="submit" onclick="yaCounter1798900.reachGoal('ORDERINDEX'); return true;" class="button button_middle message__button">Отправить</button>
			</form>
		</div>
	</div>
	<div class="message dialog__post dialog__answer">
		<div class="dialog__answerMessage">
			<div class="message__person">
				<img src="../images/antonina.png" class="message__photo" />
			</div>
			<div class="message__body message__body_blue message__body_left">
				Спасибо за ваш вопрос! <br />
	Я перезвоню вам в ближайшее время.
			</div>
		</div>
	</div>
</div>