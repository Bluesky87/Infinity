<?php
/**
 * Created by PhpStorm.
 */
require("../../../../vendor/autoload.php");
use Infinity\Others\Login\Db;

// very raw code:)
session_start();

if (isset($_POST['mail'])) {
    $mail = strip_tags($_POST['mail']);
    $password = strip_tags($_POST['password']);

    $db = new Db();
    $db = $db->connect();
    $stm = $db->prepare('SELECT password FROM users WHERE mail = :mail');

    $stm->bindParam(':mail', $mail);
    $stm->execute();
    $pass = $stm->fetchall(PDO::FETCH_OBJ);
    $pass = $pass[0]->password;

    $stm->closeCursor();

    if (password_verify($password, $pass)) {
        $_SESSION['user'] = $mail;
        $_SESSION['log'] = true;
        echo $_SESSION['user'];
        unset($_SESSION['blad']);
    } else {
        $_SESSION['blad'] = '<span style="color:red">Bład</span>';
        header("Location: login.php");
        exit;
    }
} else {
    if ($_SESSION['log'] == true) {
        echo $_SESSION['user'];
        unset($_SESSION['blad']);
    } else {
        header("Location: login.php");
        exit;
    }
}
