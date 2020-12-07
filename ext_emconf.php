<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'CSS styled content',
    'description' => 'Contains configuration for CSS content-rendering of the table "tt_content". This is meant as a modern substitute for the classic "content (default)" template which was based more on <font>-tags, while this is pure CSS.',
    'category' => 'fe',
    'state' => 'deprecated',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '10.4',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'frontend' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
