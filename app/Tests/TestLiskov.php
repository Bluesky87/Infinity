<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require("../../vendor/autoload.php");

use Infinity\Solid\Liskov\Coffee;
use Infinity\Solid\Liskov\CoffeeMaker;
use Infinity\Solid\Liskov\MilkCoffee;

$coffee = new Coffee();
$CMilk = new MilkCoffee();

$realCoffee = new CoffeeMaker();
$realCoffee->make($coffee);
$realCoffee->make($CMilk);
