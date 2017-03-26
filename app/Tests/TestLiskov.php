<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 26.03.2017
 * Time: 19:08
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
