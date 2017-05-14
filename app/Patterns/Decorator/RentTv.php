<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 13.05.2017
 * Time: 20:53
 */

namespace Infinity\Patterns\Decorator;

final class RentTv implements RentInterface
{
    private $rent;

    public function __construct(RentInterface $rent)
    {
        $this->rent = $rent;
    }

    public function price()
    {
        //echo 'You add TV';
        return $this->rent->price() + 20;
    }
}
