<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require_once('../../vendor/autoload.php');

try {
    $inputFileType = PHPExcel_IOFactory::identify('test.xls');
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $excel = $objReader->load('test.xls');
} catch (Exception $e) {
    die($e->getMessage());
}

$sheet = $excel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

for ($row = 2; $row <= $highestRow; $row++) {
    $record = current($sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, null, true, false));
}

//record 2read
