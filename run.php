<?php namespace Starcorp\TechChallange;

// Load bootstrap
require 'bootstrap.php';

// Program class
use Starcorp\TechChallange\Program;

// Execute program
$program = new Program();

// Error Handling
try {
    // Run the program
    $program->run();
} catch (\Exception $e) {
    // Print debug information
    dd($e);
}
