<?php

echo $this->renderPartial(
    '//layout/_feedback',
    [
        'question_about' => '',
        'from_text'      => 'Сообщение со страницы о ценах или о компании',
        'reach_goal'     => 'ORDER',
    ]
);
