<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */



function convert($str)
{
    return iconv("Windows-1250", "UTF-8", $str);
}


if (($handle = fopen("../../storage/test.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        // $data = array_map("convert", $data); //added
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}

//mb_detect_encoding();
