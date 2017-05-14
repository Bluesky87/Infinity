<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 14.05.2017
 * Time: 10:29
 */

namespace Infinity\Patterns\Adapter;


class NewProduct implements NewProductInterface
{
    public function price()
    {
        return 1.23;
    }
    public function name()
    {
        return 'PC';
    }
    public function size()
    {
        return '200x100';
    }
}