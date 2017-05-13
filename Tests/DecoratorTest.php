<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 13.05.2017
 * Time: 21:42
 */

namespace Infinity\Tests;

use Infinity\Patterns\Decorator\Rent;
use Infinity\Patterns\Decorator\RentFridge;
use Infinity\Patterns\Decorator\RentTv;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase {

    private $rent;

    public function setUp() {
        $this->rent = new Rent();
    }

    public function testTv() {
        $rentTv = new RentTv($this->rent);

        $this->assertEquals(120, $rentTv->price());
    }

    public function testFridge() {
        $rentFridge = new RentFridge($this->rent);

        $this->assertEquals(135, $rentFridge->price());
    }

    public function testTvAndFridge() {
        $tv = new RentTv($this->rent);

        $all = new RentFridge($tv);

        $this->assertEquals(155, $all->price());
    }

}