<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 25.04.2017
 * Time: 23:39
 */

namespace Infinity\Patterns\Adapter;


class Email implements EmailInterface
{
    public function sendMail()
    {
        return 2;
    }

}