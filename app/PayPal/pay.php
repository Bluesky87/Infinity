<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */



use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'start.php';

if (isset($_GET['approved'])) {


    //$approved = $_GET['approved'] === true;

    if ($_GET['approved']) {
        $payerId = $_GET['PayerID'];

        // get payment idfrom db

        $paymentId = $db->prepare("SELECT payment_id FROM transactions_paypal WHERE hash = :hash");

        $paymentId->execute([
            'hash' => $_SESSION['paypal_hash']
        ]);

        $paymentId = $paymentId->fetchObject()->payment_id;

        //get paypal payment
        $payment = Payment::get($paymentId, $api);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);


        // execute paypal payment (charge)
        $payment->execute($execution, $api);

        //update transactuion

        $updateTransaction = $db->prepare("
        UPDATE transactions_paypal SET complete = 1 WHERE payment_id = :payment_id
        ");

        $updateTransaction->execute([
           'payment_id' => $paymentId
        ]);

        //set user as a member

        $setMemeber =$db->prepare("
        UPDATE users SET member = 1 WHERE id = :user_id
        ");

        $setMemeber->execute([
           'user_id' => $_SESSION['user_id']
        ]);

        //unset paypal hash

        unset($_SESSION['paypal_hash']);


        header('Location: complete.php');
    } else {
        header('Location: cancelled.php');
    }
}
