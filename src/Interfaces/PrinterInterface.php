<?php namespace Starcorp\TechChallange\Interfaces;

use Starcorp\TechChallange\Multiple;

interface PrinterInterface
{
    public function __construct(Multiple $multiple);
    public function print(int $start, int $end) : string;
}