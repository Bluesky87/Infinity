<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 23.04.2017
 * Time: 17:58
 */

namespace Infinity\Patterns;


interface PaymentType
{
    public function paymentMethod($method);
}