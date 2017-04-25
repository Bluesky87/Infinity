<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 23.04.2017
 * Time: 18:01
 */

namespace Infinity\Patterns\Strategy;

class PaymentCash implements PaymentTypeInterface
{
    public function paymentMethod()
    {
        return 'You choose Cash';
    }
}
