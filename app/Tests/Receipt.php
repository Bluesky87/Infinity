<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

class Receipt
{
    public function total(array $items = [], $coupon)
    {
        $sum = array_sum($items);
        if (!is_null($coupon)) {
            $sum = $sum - ($sum * $coupon);
        }
        return $sum;
    }

    public function tax($amount, $tax)
    {
        return ($amount * $tax);
    }

    public function postTaxTotal($items, $tax, $coupon)
    {
        $subtotal = $this->total($items, $coupon);
        return $subtotal + $this->tax($subtotal, $tax);
    }
}
