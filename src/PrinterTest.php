<?php declare(strict_types=1);

namespace Starcorp\TechChallange\Tests;

use PHPUnit\Framework\TestCase;
use Starcorp\TechChallange\Multiple;
use Starcorp\TechChallange\Printer;

final class PrinterTest extends TestCase
{
    public function testCanICreateAPrinterInstance(): Printer
    {
        $multiple = new Multiple();
        $printer = new Printer($multiple);

        $this->assertInstanceOf(Printer::class, $printer);

        return $printer;
    }

    /**
     * @depends testCanICreateAPrinterInstance
     */
    public function testCanIPrintASmallRange(Printer $printer): void
    {
        $output = $printer->print(1, 5);

        $this->assertEquals("1\n2\nStarCorp\n4\nIT\n", $output);
    }
}