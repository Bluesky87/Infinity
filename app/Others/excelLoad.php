<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

try {
    $inputFileType = PHPExcel_IOFactory::identify('test.xls');
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $excel = $objReader->load('file url');
} catch(Exception $e) {
    die($e->getMessage());
}

$sheet = $excel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

for ($row = 2; $row <= $highestRow; $row++) {
    $record = current($sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE));
}

//record 2read