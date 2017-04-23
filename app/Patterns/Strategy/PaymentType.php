<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Patterns\Strategy;

interface PaymentType
{
    public function paymentMethod();
}
