<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require_once('../../vendor/autoload.php');


$excel = new PHPExcel();

$excel->setActiveSheetIndex(0)->setTitle('Testowa karta');

$excel->getActiveSheet()
    ->setCellValue('A1', 'Code')
    ->setCellValue('B1', 'Title');

$excel->getActiveSheet()
    ->setCellValue("A2", 'test')
    ->setCellValue("B2", 'opis');

$filename = 'export-'.date('YmdHis').'.xls';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header('Expires: Mon, 01 Jan 2000 00:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$writer->setPreCalculateFormulas(false);
$writer->save('php://output');
exit;
