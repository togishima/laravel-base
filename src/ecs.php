<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

    $ecsConfig->rules([
        NoUnusedImportsFixer::class
    ]);

    $ecsConfig->sets([
        // run and fix, one by one
        SetList::SPACES,
        SetList::ARRAY,
        SetList::DOCBLOCK,
        SetList::NAMESPACES,
        SetList::COMMENTS,
        SetList::PSR_12,
        Setlist::SYMPLIFY,
        SetList::STRICT,
        SetList::LARAVEL,
        SetList::CONTROL_STRUCTURES,
        SetList::COMMON,
        SetList::CLEAN_CODE,
    ]);
};
