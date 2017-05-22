<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 18.05.2017
 * Time: 22:41
 */
require("../../vendor/autoload.php");

class test
{
    public $name;
}


$test1 = new test();
$test1->name = 'Grzegorz';
$test2 = new test();
$test2->name = 'Joanna';


$tests = new \Infinity\Others\Collection([$test1, $test2]);

echo count($tests);


foreach ($tests as $item) {
    echo $item->name;
}
