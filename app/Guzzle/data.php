<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require '../../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'POST',
    'http://jsonplaceholder.typicode.com/posts',
    [
        'json' => [
            'title' => 'Guzzle',
            'body' => 'Test body request REST API',
            'userId' => 2,
        ],
    ]
);

var_dump($response);
echo $response->getBody();
