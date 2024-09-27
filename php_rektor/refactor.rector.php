<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Php81\Rector\Property\PropertyPromotionRector; // For PHP 8.1 property promotion
use Rector\CodeQuality\Rector\Method\RemoveUnusedMethodRector; // For removing unused methods

return static function (RectorConfig $rectorConfig): void {
    // Define the paths to refactor
    $rectorConfig->paths([
        __DIR__ . '/src/php_version', // Specify the directory containing code to be refactored
    ]);

    // Apply PHP 8.1 specific transformations and general refactorings
    $rectorConfig->import(LevelSetList::UP_TO_PHP_81); // Import transformations for PHP 8.1
    $rectorConfig->import(SetList::CODE_QUALITY); // Import code quality improvements

    // Register specific rektors
    $rectorConfig->rule(PropertyPromotionRector::class); // Enable property promotion
    $rectorConfig->rule(RemoveUnusedMethodRector::class); // Enable removal of unused methods
};
