<?php

    session_start();

if(isset($_SESSION['log']) && $_SESSION['log'] == true) {
    header("Location: user.php");exit;
}
?>

<!doctype html>

<html lang="pl">

    <head>
        <meta charset="utf-8">
        <title>Logowanie</title>
        <meta name="description" content="Login">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/style.css">
    </head>

    <body>

        <form class="form-signin" method="POST" action="user.php">
            <h2 class="form-signin-heading">Logowanie</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" name="mail" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Hasło" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj</button>
        </form>

        <?php
            if(isset($_SESSION['blad'])) {
                echo $_SESSION['blad'];
            }
        ?>

        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/script.js"></script>

    </body>
</html>