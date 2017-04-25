<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Patterns\Strategy;

interface PaymentTypeInterface
{
    public function paymentMethod();
}
