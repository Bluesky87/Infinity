<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require '../../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/', 'verify' => false]);

$response = $client->get(
    'posts/1'
);

var_dump($response);

$response = $client->get(
    'posts/2'
);

var_dump($response);

$response = $client->get(
    'comments/1'
);

var_dump($response);

$response = $client->get(
    'https://httpbin.org/ip'
);

var_dump($response);
