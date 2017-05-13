<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 13.05.2017
 * Time: 21:36
 */

namespace Infinity\Patterns\Decorator;


class RentFridge implements RentInterface
{
    private $rent;

    public function __construct(RentInterface $rent)
    {
        $this->rent = $rent;
    }

    public function price()
    {
        echo 'You add Fridge';
        return $this->rent->price() + 35;
    }
}