<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 14.05.2017
 * Time: 10:31
 */

namespace Infinity\Patterns\Adapter;


class NewProductAdapter implements ProductInterface
{
    private $adapter;

    public function __construct(NewProduct $product)
    {
        $this->adapter = $product;
    }

    public function getPrice()
    {
        return $this->adapter->price();
    }
    public function getName()
    {
        return $this->adapter->name();
    }
    public function getSize()
    {
        return $this->adapter->size();
    }
}