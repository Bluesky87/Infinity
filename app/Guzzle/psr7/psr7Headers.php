<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require '../../../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

if ($response->hasHeader('content-type')) {
    $header = GuzzleHttp\Psr7\parse_header($response->getHeader('content-type'));
    var_dump($header);
    //echo implode(', ' , $response->getHeader('content-type')) . "</br>";
}
