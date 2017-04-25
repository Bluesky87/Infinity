<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 25.04.2017
 * Time: 23:43
 */

namespace Infinity\Tests;

use PHPUnit\Framework\TestCase;
use Infinity\Patterns\Adapter\Email;
use Infinity\Patterns\Adapter\Message;
use Infinity\Patterns\Adapter\EmailAdapter;

class AdapterTest extends TestCase
{
    public function testMessage()
    {
        $message = new Message();
        $result = $message->send();

        $this->assertEquals(1, $result);
    }

    public function testEmail()
    {
        $email = new Email();
        $emailAdapter = new EmailAdapter($email);
        $result = $emailAdapter->send();


        $this->assertEquals(2, $result);
    }
}
