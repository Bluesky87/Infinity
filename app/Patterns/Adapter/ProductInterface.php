<?php

/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 14.05.2017
 * Time: 10:24
 */
namespace Infinity\Patterns\Adapter;

interface ProductInterface
{
    public function getName();

    public function getPrice();

    public function getSize();
}
