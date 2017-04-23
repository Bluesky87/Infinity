<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 */

namespace Infinity\Tests;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
use PHPUnit\Framework\TestCase;
use Infinity\Others\Formatter;

class FormatterTest extends TestCase
{
    public function setUp()
    {
        $this->Formatter = new Formatter();
    }

    public function tearDown()
    {
        unset($this->Formatter);
    }

    /**
     * @dataProvider  provideCurrencyAtm
     */
    public function testCurrencyAmt($input, $expected, $msq)
    {
        $this->assertSame(
            $expected,
            $this->Formatter->currencyAmt($input),
            $msq
        );
    }

    public function provideCurrencyAtm()
    {
        return [
            [1, 1.00, '1 should be transform into 1.00'],
            [1.1, 1.10, '1.1 should be transform into 1.10'],
            [1.11, 1.11, '1.11 should stay as 1.11'],
            [1.111, 1.11, '1.111 should be transform into 1.11'],
        ];
    }
}
