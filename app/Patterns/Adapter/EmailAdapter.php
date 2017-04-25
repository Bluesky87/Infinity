<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 25.04.2017
 * Time: 23:40
 */

namespace Infinity\Patterns\Adapter;

class EmailAdapter implements MessageInterface
{
    protected $email;

    public function __construct(EmailInterface $email)
    {
        $this->email = $email;
    }

    public function send()
    {
        return $this->email->sendMail();
    }
}
