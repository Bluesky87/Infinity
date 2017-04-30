<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require '../../../vendor/autoload.php';

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Client;

class JsonPlaceholderPost
{
    public function __construct($jsonString)
    {
        $decodedJsonStrong = json_decode($jsonString);
        $this->id = $decodedJsonStrong->id;
        $this->userId = $decodedJsonStrong->userId;
        $this->title = $decodedJsonStrong->title;
        $this->body = $decodedJsonStrong->body;
        unset($decodedJsonStrong);
    }

    public function __toString()
    {
        $string = "id: {$this->id} </br>";
        $string .= "userId: {$this->userId} </br>";
        $string .= "title: {$this->title} </br>";
        $string .= "body: {$this->body} </br>";
        return $string;
    }
}

$stack = new HandlerStack();
$stack->setHandler(\GuzzleHttp\choose_handler());

$stack->push(Middleware::mapRequest(function (RequestInterface $request) {
    return $request->withHeader('X-Custom-Header-Request', 'Modified Headers Using Middleware');
}), 'add_custom_header_request');

$stack->push(Middleware::mapResponse(function (ResponseInterface $response) {
    return $response->withHeader('X-Custom-Header-Response', 'Modified Headers Using Middleware');
}), 'add_custom_header_response');

$stack->push(Middleware::mapResponse(function (ResponseInterface $response) {
    $PostObj = new JsonPlaceholderPost($response->getBody());
    $PostStream = GuzzleHttp\Psr7\stream_for($PostObj);
    return $response->withBody($PostStream);
}), 'convert');

$client = new Client(['handler' => $stack]);
$response = $client->get('http://jsonplaceholder.typicode.com/posts/1');

/*$headers = $response->getHeaders();
foreach ($headers as $name => $value) {
    $value = implode(', ', $value);
    echo "{$name}: {$value}\r\n";
}*/


echo $response->getBody();
echo "</br>";

// check add middleware header
echo $response->getHeaderLine('X-Custom-Header-Response');
echo "</br>";

// test of remove from stack element convert

echo "remove CONVERT from stack </br>";

//check again

$stack->remove('convert');

$client = new Client(['handler' => $stack]);
$response = $client->get('http://jsonplaceholder.typicode.com/posts/1');

// here should be normal json not string @!
echo $response->getBody();
echo "</br>";

// check add middleware header
echo $response->getHeaderLine('X-Custom-Header-Response');
echo "</br>";
