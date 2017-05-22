<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 14.05.2017
 * Time: 19:40
 */

require_once ('../../../vendor/autoload.php');
$wsdl = 'http://localhost/infinity/soap/index.php/soap?wsdl'; // URL do wsdl naszego serwera
$client = new nusoap_client($wsdl, 'wsdl'); // tworzymy obiekt klienta
$params = array('time_format' => 'H:i:s'); // definujemy parametry wywoływanej funkcji

$response = $client->call('getTime', $params);
// wywołujemy zdalną funkcję

echo('SERVER TIME: '. $response);


$response2 = $client->call('test');



echo $response2;


$client = new SoapClient('http://localhost/pure/soap/index.php/soap?wsdl');
var_dump($client->__getFunctions());


$test4 = $client->__soapCall('test',[]);
$test = $client->test();

var_dump($test4);