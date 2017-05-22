<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 14.05.2017
 * Time: 19:15
 */

require_once('../../../vendor/autoload.php');

$server = new soap_server();
$namespace = '127.0.0.1';
$server->configureWSDL('mySOAP', $namespace);
$server->wsdl->schemaTargetNamespace = $namespace;

$server->register("getTime", array('time_format'=>'xsd:string'), array('return'=>'xsd:string'), $namespace, false, 'rpc', 'encoded', 'To jest nasza testowa metoda zwracająca czas na serwerze'
);

function getTime($time_format)
{
    $result = date($time_format);
    return new soapval('return', 'xsd:string', $result);
}

$server->register('test', array('string_format'=>'xsd:int'), array('return'=>'xsd:string'), $namespace, false, 'rpc', 'encoded', 'To jest nasza grzegorz');

function test()
{
    $result = 7;
    return new soapval('return', 'xsd:int', $result);
}


$postdata = file_get_contents("php://input");
$postdata = isset($postdata) ? $postdata : '';

// startujemy usługę
$server->service($postdata);
