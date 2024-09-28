<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php71\Rector\List_\ListToArrayDestructRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;

return static function (RectorConfig $rectorConfig): void {
    // Define the paths to refactor
    $rectorConfig->paths([
        __DIR__ . '/src/refactor',
    ]);

    // Option to remove unused imports
    $rectorConfig->importNames();

    // Define individual rules to apply
    $rectorConfig->rule(ListToArrayDestructRector::class);
    $rectorConfig->rule(NullToStrictStringFuncCallArgRector::class);
};