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

/*echo $response->getBody()->read(20) . "</br>";   //number of bytes
echo $response->getBody()->read(20) . "</br>";   //number of bytes next
echo $response->getBody()->read(20) . "</br>";   //number of bytes next*/

echo $response->getBody()->getSize() . "</br>";
echo $response->getBody()->read(20) . "</br>";
echo $response->getBody()->getSize() . "</br>";
