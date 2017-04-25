<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 23.04.2017
 * Time: 18:03
 */

namespace Infinity\Patterns\Strategy;

class PaymentCreditCard implements PaymentTypeInterface
{
    public function paymentMethod()
    {
        return 'You choose Credit Card';
    }
}
