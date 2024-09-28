<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php71\Rector\List_\ListToArrayDestructRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;

return RectorConfig::configure()
    ->withPaths([__DIR__ . '/src/refactor'])
    ->withImportNames(removeUnusedImports: true)
    ->withRules([
        ListToArrayDestructRector::class,
        NullToStrictStringFuncCallArgRector::class,
    ]);