<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */
require("../../vendor/autoload.php");

use Infinity\Patterns\Strategy\ChoosePayment;
use Infinity\Patterns\Strategy\PaymentCash;

$paymentType = new ChoosePayment();

$paymentClass = $paymentType->create(new PaymentCash());

echo $paymentClass->paymentMethod();
