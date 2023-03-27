<?php

/**
 * Extension Manager/Repository config file for ext "sbss".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'SBSS',
    'description' => 'SBSS Theme',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Trendhosting\\Sbss\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Trendhosting',
    'author_email' => 'dado@trendhosting.ch',
    'author_company' => 'Trendhosting',
    'version' => '1.0.0',
];
