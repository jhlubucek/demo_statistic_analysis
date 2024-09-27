<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    // Define the paths to refactor
    $rectorConfig->paths([
        __DIR__ . '/src/php_version',
    ]);

    // Apply PHP 8.1 specific transformations and general refactorings
    $rectorConfig->import(LevelSetList::UP_TO_PHP_81);
    $rectorConfig->import(SetList::CODE_QUALITY);
};
