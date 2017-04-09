<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */
namespace Infinity\Test;

require __DIR__ . '/../vendor/autoload.php';


class MockTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        \Mockery::close();
    }

    public function testMo()
    {
    }
}
