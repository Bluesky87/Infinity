<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 15.03.2017
 * Time: 21:04
 */
require  'vendor/autoload.php';
echo ':)';
use SebastianBergmann\Environment\Runtime;

$runtime = new Runtime;

var_dump($runtime->getNameWithVersion());
var_dump($runtime->getName());
var_dump($runtime->getVersion());
var_dump($runtime->getBinary());
var_dump($runtime->isHHVM());
var_dump($runtime->isPHP());
var_dump($runtime->hasXdebug());
var_dump($runtime->canCollectCodeCoverage());
