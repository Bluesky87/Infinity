<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 25.04.2017
 * Time: 23:37
 */

namespace Infinity\Patterns\Adapter;


class Message implements MessageInterface
{
    public function send()
    {
        return 1;
    }
}