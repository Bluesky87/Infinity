<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */


require_once 'start.php';


?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Paypal test</title>
    </head>
    <body>
    <?php  if ($user->member): ?>
        <p>You are member<p>
    <?php  else: ?>
        <p>You are not member. <a href="payment.php">Become a memeber</a></p>
    <?php endif; ?>
    </body>
</html>
