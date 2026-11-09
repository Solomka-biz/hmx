<?php
/**
 * @var int $counterId
 */
$counterParams = array();
$blockData = array(
    'i-googleAnalytics' => array(
        'counterId'     => $counterId,
        'counterParams' => $counterParams,
    )
);
?>
<!-- Google.Analytics counter -->
<div class="i-googleAnalytics i-bem"
     style="display: none"
     onclick="return <?= CJavaScript::encode($blockData) ?>;"></div>
<!-- /Google.Analytics counter -->