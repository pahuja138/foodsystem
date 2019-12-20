<?php

/**
 * Extension Manager/Repository config file for ext "foodsystem".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'foodsystem',
    'description' => 'Use of this package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PratikAhuja\\Foodsystem\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Pratik ahuja',
    'author_email' => 'pahuja@hof-university.de',
    'author_company' => 'pratik ahuja',
    'version' => '1.0.0',
];
