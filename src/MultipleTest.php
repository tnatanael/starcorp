<?php declare(strict_types=1);

namespace Starcorp\TechChallange\Tests;

use PHPUnit\Framework\TestCase;

use Starcorp\TechChallange\Multiple;

final class MultipleTest extends TestCase
{
    public function testCanICreateAMultipleInstance(): Multiple
    {
        $multiple = new Multiple();
        $this->assertInstanceOf(Multiple::class, $multiple);
        return $multiple;
    }

    /**
     * @depends testCanICreateAMultipleInstance
     */
    public function testCanIGetDivisor3MultipleResponse(Multiple $multiple): void
    {
        // First we need to create a reader from example asset file
        $multiple->setNumber(3);
        $this->assertEquals($multiple->getText(), 'StarCorp');
    }

    /**
     * @depends testCanICreateAMultipleInstance
     */
    public function testCanIGetDivisor5MultipleResponse(Multiple $multiple): void
    {
        // First we need to create a reader from example asset file
        $multiple->setNumber(5);
        $this->assertEquals($multiple->getText(), 'IT');
    }

    /**
     * @depends testCanICreateAMultipleInstance
     */
    public function testCanIGetDivisor35MultipleResponse(Multiple $multiple): void
    {
        // First we need to create a reader from example asset file
        $multiple->setNumber(15);
        $this->assertEquals($multiple->getText(), 'StarCorpianos');
    }

    /**
     * @depends testCanICreateAMultipleInstance
     */
    public function testCanIGetNoDivisorMultipleResponse(Multiple $multiple): void
    {
        // First we need to create a reader from example asset file
        $multiple->setNumber(2);
        $this->assertEquals($multiple->getText(), 2);
    }
}