<?php namespace Starcorp\TechChallange;

use Starcorp\TechChallange\Interfaces\PrinterInterface;

class Printer implements PrinterInterface
{
    // Multiple instance
    private $multiple;

    // Impression pool
    private $pool;

    /**
     * Class constructor
     */
    public function __construct(Multiple $multiple)
    {
        // Store options
        $this->multiple = $multiple;
        // Create an empty pool
        $this->pool = '';
    }

    /**
     * Returns the string to print
     */
    public function print(int $start, int $end) : string
    {
        // Generate array to print from options
        $numbers_array = $this->generateArray($start, $end);

        // Travel the numbers array
        foreach ($numbers_array as $number) {
            // Apply the multiple number
            $this->multiple->setNumber($number);
            // Get the multiple text and add to printing pool with EOL
            $this->pool.= $this->multiple->getText() . PHP_EOL;
        }

        return $this->pool;
    }

    /**
     * Generate array to travel
     */
    private function generateArray(int $start, int $end) : array
    {
        return range($start, $end);
    }
}
