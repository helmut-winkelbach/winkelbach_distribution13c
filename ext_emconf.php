<?php

/**
 * Extension Manager/Repository config file for ext "winkelbach_distribution13c".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Winkelbach-Distribution13c',
    'description' => 'Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.4.99',
            'typo3' => '12.4.0-13.4.99',
            'backend' => '12.4.0-13.4.99',
            'frontend' => '12.4.0-13.4.99',
            'rte_ckeditor' => '12.4.0-13.4.99',
            'fluid_styled_content' => '12.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WinkelbachWebdesign\\WinkelbachDistribution13c\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Helmut Winkelbach',
    'author_email' => 'helmut@winkelbach-web.de',
    'author_company' => 'Winkelbach WebDesign',
    'version' => '4.0.0',
];
