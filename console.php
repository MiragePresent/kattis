<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Nav;
use App\Decorator;

/** @var \App\Nav $nav Navigation handler */
$nav = new Nav;

// Get number of inputs
echo Decorator::blueText("Please enter number of inputs: ");
$attempts = readline();

// Number of attempts have to be grater than 0
if ($attempts < 1) {
    echo Decorator::greenText("Result is empty\n");
    exit;
}

// Get inputs
for ($i = 1; $i <= $attempts; $i++) {
    echo Decorator::blueText("Input {$i}: ");
    $nav->addInput(readline());
}

echo Decorator::greenText("Result: {$nav->calc()}") . PHP_EOL;