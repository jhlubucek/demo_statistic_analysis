<?php

// Example 1: Deprecated create_function usage (PHP 7.2+ deprecation)
$callback = create_function('$a,$b', 'return $a + $b;');
echo "3+2=" . $callback(1, 2) . PHP_EOL; // Outputs 3

// Example 2: Incorrect implode usage (PHP 7.4+ deprecation)
$pieces = ['apple', 'orange', 'banana'];
$fruitString = implode($pieces, ', '); // Wrong order of arguments (should be separator first)
echo "fruits:" . $fruitString . PHP_EOL; // Expected output: "apple, orange, banana"

