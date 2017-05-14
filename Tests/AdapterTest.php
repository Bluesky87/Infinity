<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 25.04.2017
 * Time: 23:43
 */

namespace Infinity\Tests;

use PHPUnit\Framework\TestCase;
use Infinity\Patterns\Adapter\NewProduct;
use Infinity\Patterns\Adapter\NewProductAdapter;

class AdapterTest extends TestCase
{
    public function testPriceInNewProduct()
    {
        $product = new NewProduct();
        $name = $product->name();

        $this->assertEquals('PC', $name);
    }

    public function testPriceInNewProductAdapter()
    {
        $product = new NewProduct();
        $productAdapter = new NewProductAdapter($product);

        $productAdapterName = $productAdapter->getName();

        $this->assertEquals('PC', $productAdapterName);
    }
}
