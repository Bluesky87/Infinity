<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

session_start();

require_once("../../../vendor/autoload.php");

Facebook\FacebookSession::setDefaultApplication('622195087925788', '411c918305d238d8c9cc4b4af1ac2574');

$facebook = new Facebook\FacebookRedirectLoginHelper('http://localhost/infinity/view/templates/facebook/signin.php');

try {
    if ($session = $facebook->getSessionFromRedirect()) {
        $_SESSION['facebook'] = $session->getToken();
        header('Location: http://localhost/infinity/view/templates/facebook/signin.php');
    }

    if (isset($_SESSION['facebook'])) {
        $session = new Facebook\FacebookSession(($_SESSION['facebook']));
        $request = new Facebook\FacebookRequest($session, 'GET', '/me');
        $request = $request->execute();

        $user = $request->getGraphObject()->asArray();
        print_r($user);
    }
} catch (Facebook\FacebookRequestException $e) {
    // When facebook error
} catch (\Exception $e) {
    // local problem
}
