<?php

use Rector\Set\ValueObject\DowngradeLevelSetList;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        DowngradeLevelSetList::DOWN_TO_PHP_73
    ]);

    $rectorConfig->paths([
        __DIR__ . '/Classes/*',
    ]);
};
