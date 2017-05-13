<?php

use Infinity\Patterns\Decorator\Rent;
use Infinity\Patterns\Decorator\RentTv;
use Infinity\Patterns\Decorator\RentFridge;

require  '../../../vendor/autoload.php';


$rent = new Rent();

$addTv = new RentTv($rent);

$addFridge = new RentFridge(new RentTv($rent));

//echo ($addTv->price());

echo ($addFridge->price());