<?php declare(strict_types=1);

namespace Starcorp\TechChallange\Tests;

use PHPUnit\Framework\TestCase;

final class PrinterFactoryTest extends TestCase
{
    public function testCanICreateAPrinterInstanceFromFactory(): void
    {
        // Create a multiple
        $multiple = new \Starcorp\TechChallange\Multiple(rand());

        $this->assertInstanceOf(
            \Starcorp\TechChallange\Interfaces\PrinterInterface::class,
            \Starcorp\TechChallange\Factories\PrinterFactory::create($multiple)
        );
    }
}