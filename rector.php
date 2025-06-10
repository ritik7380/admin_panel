<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $config): void {
    $config->paths([
        __DIR__.'/app',
        __DIR__.'/routes',
        __DIR__.'/database',
    ]);

    $config->sets([
        LevelSetList::UP_TO_PHP_82,
    ]);
};
