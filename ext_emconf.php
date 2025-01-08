<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'IP Authentication',
    'description' => 'Authenticates users based on IP address settings',
    'category' => 'services',
    'author' => 'Tomas Norre Mikkelsen',
    'author_email' => 'dev@aoe.com',
    'author_company' => 'AOE GmbH',
    'state' => 'stable',
    'version' => '5.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
