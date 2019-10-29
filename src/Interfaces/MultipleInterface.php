<?php namespace Starcorp\TechChallange\Interfaces;

interface MultipleInterface
{
    public function __construct();
    public function setNumber(int $number): void;
    public function getText(): string;
}