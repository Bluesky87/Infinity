<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require '../../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts',
    [
        'query' => [
            'userId' => 1
        ]
    ]
);

echo $response->getStatusCode();
echo $response->getBody();
