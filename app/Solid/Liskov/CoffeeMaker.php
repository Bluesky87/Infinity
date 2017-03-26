<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 26.03.2017
 * Time: 18:55
 */

namespace Infinity\Solid\Liskov;

class CoffeeMaker
{
    public function make(Coffee $param)
    {
        $param->info();
    }
}
