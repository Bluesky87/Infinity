<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */



function convert( $str ) {
    return iconv( "Windows-1250", "UTF-8", $str );
}


if (($handle = fopen("../../storage/test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
       // $data = array_map("convert", $data); //added
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}

//mb_detect_encoding();