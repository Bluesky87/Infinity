<?php

require_once '../../../app/facebook/init.php';

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Facebook Sign In</title>
    </head>
    <body>
        <?php if (!isset($_SESSION['facebook'])): ?>
    <a href="<?php echo $facebook->getLoginUrl(); ?>">Sign in with Facebook</a>
            <?php else: ?>
            <p>You are singed in, <?php echo $user['name']; ?> <a href="signout.php">Sign out</a></p>
        <?php endif; ?>
    </body>
</html>