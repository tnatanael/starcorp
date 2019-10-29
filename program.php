<?php namespace Starcorp\TechChallange;

use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;
use Starcorp\TechChallange\Factories\MultipleFactory;
use Starcorp\TechChallange\Factories\PrinterFactory;

/**
 * Main Program
 */
class Program extends CLI
{
    public $options;

    /**
     * Setup options and helpers
     *
     * @param  Options $options Array of options
     * @return void
     */
    protected function setup(Options $options)
    {
        $options->setHelp('StarCorp TechChallange');
        $options->registerOption('start', 'Start number', 's', true);
        $options->registerOption('end', 'End number', 'e', true);

        $this->options = $options;
    }

    /**
     * Standardizer CLI
     *
     * @param Options $options
     * @return void
     */
    protected function main(Options $options)
    {
        // TODO: Add input validation rules
        $start = (int) $this->options->getOpt('start');
        $end = (int) $this->options->getOpt('end');

        // Create the multiple instance
        $multiple = MultipleFactory::create();

        // Create the printer injecting multiple instance
        $printer = PrinterFactory::create($multiple);

        // Execute the printer and get output
        $output = $printer->print($start, $end);

        // Echo output single time (for performance)
        echo $output;
    }
}