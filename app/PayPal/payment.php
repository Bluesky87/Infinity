<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PayPalConnectionException;

require 'start.php';

$payer = new Payer();
$details = new Details();
$amount = new Amount();
$transaction = new Transaction();
$payment = new Payment();
$redirectUrls = new RedirectUrls();


// Payer
$payer->setPaymentMethod('paypal');

//Details

$details->setShipping('2.00')
        ->setTax('0.00')
        ->setSubtotal('20.00');

//Amount
$amount->setCurrency('GBP')
    ->setTotal('22.00')
    ->setDetails($details);

//Transaction

$transaction->setAmount($amount)
            ->setDescription('Memebership');

//Payment
$payment->setIntent('sale')
        ->setPayer($payer)
        ->setTransactions([$transaction]);//can be many


//Redirect url

$redirectUrls->setReturnUrl('http://localhost/infinity/app/paypal/pay.php?approved=true')
            ->setCancelUrl('http://localhost/infinity/app/paypal/cancelled.php?approved=false');


$payment->setRedirectUrls($redirectUrls);

try {
    $payment->create($api);

    // generate and store hash
    $hash = md5($payment->getId());
    $_SESSION['paypal_hash'] = $hash;
    // prepare and execute transaction storage
    $store = $db->prepare("
    INSERT INTO transactions_paypal (user_id, payment_id, hash, complete)
    VALUES(:user_id, :payment_id, :hash, 0)
    ");

    $store->execute([
        'user_id' => $_SESSION['user_id'],
        'payment_id' => $payment->getId(),
        'hash' => $hash
    ]);
} catch (PayPalConnectionException $e) {
    //error
    header('Location: error.php');
}



foreach ($payment->getLinks() as $link) {
    if ($link->getRel() == 'approval_url') {
        $redirectUrls = $link->getHref();
    }
}

header('Location: ' . $redirectUrls);
