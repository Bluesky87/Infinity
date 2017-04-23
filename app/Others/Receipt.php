<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Others;

use \BadMethodCallException;

class Receipt
{
    public function __construct($formatter)
    {
        $this->Formatter = $formatter;
    }

    public function total(array $items = [], $coupon)
    {
        if ($coupon > 1.00) {
            throw new BadMethodCallException(('Coupon must be lessthan or equal to 1.00'));
        }
        $sum = array_sum($items);
        if (!is_null($coupon)) {
            $sum = $sum - ($sum * $coupon);
        }
        return $sum;
    }

    public function tax($amount, $tax)
    {
        return $this->Formatter->currencyAmt($amount * $tax);
    }

    public function postTaxTotal($items, $tax, $coupon)
    {
        $subtotal = $this->total($items, $coupon);
        return $subtotal + $this->tax($subtotal, $tax);
    }
}
