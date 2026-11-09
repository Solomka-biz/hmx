<?php

echo $this->renderPartial(
    '//layout/_feedback',
    [
        'question_about' => 'по созданию для вас бесплатного сайта.',
        'from_text'      => 'Сообщение со страницы заказа бесплатного сайта',
        'reach_goal'     => 'ORDERFREESITE',
    ]
);
