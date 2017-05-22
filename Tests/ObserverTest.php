<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

use PHPUnit\Framework\TestCase;
use Infinity\Patterns\Observer\Newsletter;
use Infinity\Patterns\Observer\Observer1;
use Infinity\Patterns\Observer\Observer2;

class ObserverTest extends TestCase
{
    public function testRegisterInNewsletterObserverNotified()
    {
        $observer = new Observer1();
        $observer2 = new Observer2();
        $news = new Newsletter();
        $news->attach($observer);
        $news->attach($observer2);

        $news->register(['id' => '123', "mail" => 'test@interia.pl', 1]);
        $news->register(['id' => '1234', "mail" => 'test@interia2.pl', 1]);

        $this->assertCount(2, $observer->getAddUsers());
        $this->assertCount(2, $observer2->getAddUsers());
    }
}
