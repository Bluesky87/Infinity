<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

use PHPUnit\Framework\TestCase;
use Infinity\Patterns\Observer\Newsletter;
use Infinity\Patterns\Observer\Observer1;

class ObserverTest extends TestCase
{
    public function testRegisterInNewsletterObserverNotified()
    {
        $observer = new Observer1();
        $news = new Newsletter();
        $news->attach($observer);

        $news->register(['id' => '123', "mail" => 'test@interia.pl', 1]);
        $news->register(['id' => '1234', "mail" => 'test@interia2.pl', 1]);
        $this->assertCount(2, $observer->getAddUsers());
    }
}
