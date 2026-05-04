<?php

declare(strict_types=1);

return [
    'openapi-file' => dirname(__DIR__, 2) . '/dist/pecom.json',
    'namespace' => 'glook\\PecomSdk\\Generated',
    'directory' => __DIR__ . '/generated',
    'strict' => true,
    'skip-null-values' => true,
    'skip-required-fields' => false,
    'throw-unexpected-status-code' => true,
    'clean-generated' => true,
    'use-fixer' => true,
    'full-date-format' => 'Y-m-d',
    'date-format' => 'Y-m-d\\TH:i:s',
];
