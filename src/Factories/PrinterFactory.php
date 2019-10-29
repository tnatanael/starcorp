<?php namespace Starcorp\TechChallange\Factories;

use Starcorp\TechChallange\Interfaces\MultipleInterface;
use Starcorp\TechChallange\Printer;

/**
 * Printer factory
 */
class PrinterFactory
{
    /**
     * Printer
     *
     * @param $options Program options object
     */
    public static function create(MultipleInterface $multiple)
    {
        return new Printer($multiple);
    }
}
