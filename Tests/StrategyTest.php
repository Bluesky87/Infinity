<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

require __DIR__ . '/../vendor/autoload.php';
use Infinity\Patterns\Strategy\ChoosePayment;
use Infinity\Patterns\Strategy\PaymentCash;
use Infinity\Patterns\Strategy\PaymentCreditCard;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function setUp()
    {
        $this->paymentType = new ChoosePayment();
    }

    public function tearDown()
    {
        unset($this->paymentType);
    }

    public function testCreditCardType()
    {
        $this->paymentType->setType(new PaymentCreditCard());
        $result = $this->paymentType->getType()->paymentMethod();
        $this->assertEquals('You choose Credit Card', $result);
    }

    public function testPaymentCashType()
    {
        $this->paymentType->setType(new PaymentCash());
        $result = $this->paymentType->getType()->paymentMethod();
        $this->assertEquals('You choose Cash', $result);
    }
}
