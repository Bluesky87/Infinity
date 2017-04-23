<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Others;

class Formatter
{
    public function currencyAmt($input)
    {
        return round($input, 2);
    }
}
