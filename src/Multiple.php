<?php namespace Starcorp\TechChallange;

use Starcorp\TechChallange\Interfaces\MultipleInterface;

class Multiple implements MultipleInterface
{
    /**
     * Number to check
     */
    private $number;

    /**
     * Divisors array
     */
    private $divisors;

    /**
     * Class constructor
     */
    public function __construct()
    {
        // Create the divisors array
        $this->divisors = [3,5];
    }

    /**
     * Set the number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * The multiple divisor implementation
     */
    public function getText() : string
    {
        // A divisor function prefix just to improve readability
        $function = 'divisor';

        // Travel the divisors array
        foreach ($this->divisors as $divisor) {
            // Here the SINGLE if statement!
            $function.= ($this->number % $divisor) ? '' : $divisor;
        }

        // Return the correspoondent text
        return $this->$function();
    }

    /**
     * Divisor Empty
     */
    private function divisor() : string
    {
        return (string) $this->number;
    }

    /**
     * Divisor 3
     */
    private function divisor3() : string
    {
        return 'StarCorp';
    }

    /**
     * Divisor 5
     */
    private function divisor5() : string
    {
        return 'IT';
    }

    /**
     * Divisor 3 and 5
     */
    private function divisor35() : string
    {
        return 'StarCorpianos';
    }
}