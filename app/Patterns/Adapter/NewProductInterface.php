<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 14.05.2017
 * Time: 10:27
 */

namespace Infinity\Patterns\Adapter;


interface NewProductInterface
{
    public function name();
    public function price();
    public function size();
}