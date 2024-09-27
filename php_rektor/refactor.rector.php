<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php71\Rector\List_\ListToArrayDestructRector;
use Rector\CodingStyle\Rector\Use_\RemoveUnusedAliasRector;
use Rector\Naming\Rector\Assign\StringToClassConstantRector;
use Rector\Php80\Rector\FuncCall\StaticCallToFuncCallRector;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Php80\Rector\Identical\NullableCompareToNullRector;
use Rector\Php81\Rector\Property\NewInInitializerRector;

return static function (RectorConfig $rectorConfig): void {
    // Path to the file you want to refactor
    $rectorConfig->paths([__DIR__ . '/src/refactor']);

    // Optional: automatically import names
    $rectorConfig->importNames(true);

    // Enable refactor rules
    // Enable refactor rules
    $rectorConfig->rules([
        ListToArrayDestructRector::class,        // Convert list() to array destructuring
        RemoveUnusedAliasRector::class,          // Remove unused 'use' imports
        StringToClassConstantRector::class,      // Convert string class names to ::class
        StaticCallToFuncCallRector::class,       // Convert static calls to function calls
        TypedPropertyRector::class,              // Convert properties to typed properties
        NullableCompareToNullRector::class,      // Refactor nullable comparisons to null checks
        NewInInitializerRector::class,           // Use new initializers in properties for PHP 8.1
    ]);
};
