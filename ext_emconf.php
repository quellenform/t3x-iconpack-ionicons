<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Iconpack: Ionicons',
    'description' => 'This Extension registers an Iconpack-Provider for EXT:iconpack which allows you to use the "Ionicons" in TYPO3.',
    'category' => 'fe',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.11-11.5.99',
            'iconpack' => '0.2.0-0.2.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
