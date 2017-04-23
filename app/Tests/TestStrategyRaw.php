<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */
require("../../vendor/autoload.php");

use Infinity\Patterns\Strategy\ChoosePayment;
use Infinity\Patterns\Strategy\PaymentCash;

$paymentType = new ChoosePayment();

$paymentType->setType(new PaymentCash());

echo $paymentType->getType()->paymentMethod();
