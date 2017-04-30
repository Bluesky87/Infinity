<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require '../../../vendor/autoload.php';

use GuzzleHttp\Psr7;

$stream = Psr7\stream_for('this is string data');
echo $stream . "</br>";
echo $stream->getSize() . "</br>";
echo $stream->isReadable() . "</br>";
echo $stream->isReadable() . "</br>";
echo $stream->isSeekable() . "</br>";

$stream->write(' TEST');
$stream->rewind();
echo $stream->read(5) . "</br>";
echo $stream->getContents() . "</br>";
echo $stream->eof() . "</br>";
