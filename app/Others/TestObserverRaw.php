<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

require("../../vendor/autoload.php");
$news = new \Infinity\Patterns\Observer\Newsletter();
$observer = new Infinity\Patterns\Observer\Observer1();

$news->attach($observer);

$news->register(['id' => '123', "mail" => 'test@interia.pl', 1]);
