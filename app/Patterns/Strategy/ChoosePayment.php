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

    public function setType(PaymentTypeInterface $paymentType)
    {
        $this->paymentType = $paymentType;
    }

    public function getType()
    {
        return $this->paymentType;
    }
}
