<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */
namespace Infinity\Tests;

require __DIR__ . '/../vendor/autoload.php';
use Infinity\Patterns\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSingleton()
    {
        $obj = Singleton::getInstance();
        $obj2 = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $obj);
        $this->assertSame($obj, $obj2);
    }
}
