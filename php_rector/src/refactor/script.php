<?php

declare(strict_types=1);

namespace Refactor;

class Example
{
    public function listExample()
    {
        list($first, $second) = [1, 2]; // List syntax to be refactored
        echo $first, ',', $second;
    }

    public function nullToStrictString(?string $input)
    {
        return strtoupper($input); // Null argument to be handled
    }
}

// Example usage
$example = new Example();
$example->listExample();
echo $example->nullToStrictString(null);
echo $example->nullToStrictString('Hello');