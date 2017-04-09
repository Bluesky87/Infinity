<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Solid\Liskov;

class CoffeeMaker
{
    public function make(Coffee $param)
    {
        $param->info();
    }
}
