<?php
defined('TYPO3_MODE') || die();

$fields = array(
    'location_simple' => array(
        'exclude' => 1,
        'label' => 'My location',
        'config' => array(
            'type' => 'input',
            'size' => 15
        ),
    ),
    'id' => [
    'exclude' => false,
    'label' => 'LLL:EXT:comunicatistampa/Resources/Private/Language/locallang_db.xlf:tx_comunicatistampa_domain_model_comunicatistampa.id',
    'config' => [
        'type' => 'input',
        'size' => 4,
        'eval' => 'int',
        'default' => 0
        ]
    ],
    'ricerca' => [
        'exclude' => true,
        'label' => 'LLL:EXT:comunicatistampa/Resources/Private/Language/locallang_db.xlf:tx_comunicatistampa_domain_model_comunicatistampa.ricerca',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ],
    ],

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'location_simple');

$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['type']['config']['items']['4'] =
    ['pressroom', 4] ;
/*
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['3'] = [
    'showitem' => ' 
        --palette--;;paletteCore,title,--palette--;;paletteSlug,bodytext,
         datetime,fal_media,ricerca,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,'
];
*/