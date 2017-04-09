<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
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
