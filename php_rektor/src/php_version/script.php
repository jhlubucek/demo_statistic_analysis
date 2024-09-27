<?php

// Example 1: Deprecated create_function usage (PHP 7.2+ deprecation)
$callback = create_function('$a,$b', 'return $a + $b;');
echo $callback(1, 2) . PHP_EOL; // Outputs 3

// Example 2: Incorrect implode usage (PHP 7.4+ deprecation)
$pieces = ['apple', 'orange', 'banana'];
$fruitString = implode($pieces, ', '); // Wrong order of arguments (should be separator first)
echo $fruitString . PHP_EOL; // Expected output: "apple, orange, banana"

// Example 3: Static call to an instance method
class MyCalculator {
    public function multiply($a, $b) {
        return $a * $b;
    }
}

// This is an incorrect static method call
echo script . phpMyCalculator::multiply(3, 4) . PHP_EOL; // Should throw an error in PHP 7.4+
