<?php
/**
 * @var $pageData CalculatorResultPageData
 * @var $form     CalculatorForm
 */
$dateText = date('Y-m-d');

PHPRtfLite_Unit::setGlobalUnit(PHPRtfLite_Unit::UNIT_CM);

$rtf = new PHPRtfLite();
$rtf->setMargins(1, 1, 1, 1);
$rtf->setCharset('utf-8');

$section = $rtf->addSection();
$section->setMargins(1, 1, 1, 1);

$headerFont = new PHPRtfLite_Font(14, 'Helvetica', '#000000');
$headerFont->setBold(true);
$headerFormat = new PHPRtfLite_ParFormat(PHPRtfLite_ParFormat::TEXT_ALIGN_CENTER);
$section->writeText("Результат расчета\n", $headerFont, $headerFormat);

$section->writeText("&quot;{$form->url}&quot; $dateText\n", null, $headerFormat);

$table = $section->addTable();
$table->addColumnsList([null, null, null]);

$headerRow = $table->addRow();
$headerRow->getCellByIndex(1)->writeText('Ключевые слова');
$headerRow->getCellByIndex(2)->writeText('Показы');
$headerRow->getCellByIndex(3)->writeText('Стоимость продвижения');

foreach ($pageData->keywords as $keyword) {

    $row = $table->addRow();
    $row->getCellByIndex(1)->writeText($keyword->getPhrase());
    $row->getCellByIndex(2)->writeText($keyword->getShows());
    $row->getCellByIndex(3)->writeText($keyword->getPrice());
}

foreach ($pageData->hintwords as $hintword) {
    $row = $table->addRow();
    $row->getCellByIndex(1)->writeText($hintword->getPhrase());
    $row->getCellByIndex(2)->writeText($hintword->getShows());
    $row->getCellByIndex(3)->writeText($hintword->getPrice());
}

{
    // Итого:
    $row = $table->addRow();
    $totalFont = new PHPRtfLite_Font(11);
    $totalFont->setBold();

    $totalText = "Итого:";
    if ($pageData->discount) {
        $discountText = round($pageData->discount * 100);
        $totalText .= " (со скидкой {$discountText}%)";
    }
    $row->getCellByIndex(1)->writeText($totalText);
    $row->getCellByIndex(2)->writeText("0");
    $row->getCellByIndex(3)->writeText("{$pageData->totalCostWithDiscount} руб./мес");
}

$filename = preg_replace("/[^a-zA-Z0-9-_]/i", "_", $form->url) . "__" . $dateText;
$rtf->sendRtf($filename);