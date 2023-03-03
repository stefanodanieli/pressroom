<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'pressroom',
    'description' => '',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'news' => '6.2.0-10.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
