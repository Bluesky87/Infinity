<?php

/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 13.05.2017
 * Time: 20:50
 */
namespace Infinity\Patterns\Decorator;

final class Rent implements RentInterface
{
    public function price()
    {
        //echo 'You rent a flat';
        return 100;
    }
}
