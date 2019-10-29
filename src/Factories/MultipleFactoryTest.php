<?php declare(strict_types=1);

namespace Starcorp\TechChallange\Tests;

use PHPUnit\Framework\TestCase;

final class MultipleFactoryTest extends TestCase
{
    public function testCanICreateAMultipleInstanceFromFactory(): void
    {
        $this->assertInstanceOf(
            \Starcorp\TechChallange\Interfaces\MultipleInterface::class,
            \Starcorp\TechChallange\Factories\MultipleFactory::create()
        );
    }
}