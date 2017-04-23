<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
//require __DIR__ . '/../vendor/autoload.php';
use Infinity\Others\Receipt;

use PHPUnit\Framework\TestCase;

class ReceiptTest extends TestCase
{
    public function setUp()
    {
        $this->Formatter = $this->getMockBuilder('Infinity\Tests\Formatter')
            ->setMethods(['currencyAmt'])
            ->getMock();
        $this->Formatter->expects($this->any())
            ->method('currencyAmt')
            ->with($this->anything())
            ->will($this->returnArgument(0));
        $this->Receipt = new Receipt($this->Formatter);
    }

    public function tearDown()
    {
        unset($this->Receipt);
    }

    /**
     * @dataProvider provideTotal
     */
    public function testTotal($items, $expected)
    {
        //$input = [0, 2, 5, 8];
        $coupon = null;
        $output = $this->Receipt->total($items, $coupon);
        $this->assertEquals(
          // 15,
            $expected,
           $output,
           "When summing the total should equal {$expected}"
       );
    }

    public function provideTotal()
    {
        return [
           'ints totaling 16' => [[1, 2, 5, 8], 16],
            [[-1, 2, 5, 8], 14],
            [[1, 2, 8], 11],
        ];
    }

    public function testTotalAndCoupon()
    {
        $input = [0, 2, 5, 8];
        $coupon = 0.20;
        $output = $this->Receipt->total($input, $coupon);
        $this->assertEquals(
            12,
            $output,
            'When summing the total should equal 12'
        );
    }

    public function testTotalException()
    {
        $input = [0, 2, 5, 8];
        $coupon = 1.20;
        //$this->expectE
        $this->expectException('BadMethodCallException');
        $this->Receipt->total($input, $coupon);
    }

    public function testPostTaxTotal()
    {
        $items = [1, 2, 5, 8];
        $tax = 0.20;
        $coupon = null;
        $Receipt = $this->getMockBuilder('Infinity\Others\Receipt')
            ->setMethods(['tax', 'total'])
            ->setConstructorArgs([$this->Formatter])
            ->getMock();
        $Receipt->expects($this->once())
            ->method('total')
            ->with($items, $coupon)
            ->will($this->returnValue(10.00));
        $Receipt->expects($this->once())
            ->method('tax')
            ->with(10.00, $tax)
            ->will($this->returnValue(1.00));
        $result = $Receipt->postTaxTotal([1, 2, 5 ,8], 0.20, null);
        $this->assertEquals(11.00, $result);
    }

    public function testTax()
    {
        $inputAmount = 10.00;
        $taxInput = 0.10;
        $output = $this->Receipt->tax($inputAmount, $taxInput);
        $this->assertEquals(
            1.00,
            $output,
            'The tax calculation should equal 1.00'
        );
    }
}
