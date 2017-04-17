<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require_once '../../../app/facebook/init.php';

unset($_SESSION['facebook']);

header('Location: http://localhost/infinity/view/templates/facebook/signin.php');
