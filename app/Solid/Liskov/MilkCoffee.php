<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 26.03.2017
 * Time: 18:53
 */

namespace Infinity\Solid\Liskov;

class MilkCoffee extends Coffee
{
    public function info()
    {
        parent::info();
        echo "<br>"." Add Milk";
    }
}
