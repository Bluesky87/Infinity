<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 23.04.2017
 * Time: 18:05
 */

namespace Infinity\Patterns\Strategy;

class ChoosePayment
{
    private $paymentType;

    public function create(PaymentType $paymentType)
    {
        $this->paymentType = $paymentType;
        return $this->paymentType;
    }

    /*public function getType(){
        return $this->paymentType;
    }*/
}
