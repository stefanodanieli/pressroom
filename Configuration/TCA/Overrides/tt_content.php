<?php
defined('TYPO3_MODE') or die();

/***************
 * Plugin
 */


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Polimi.Pressroom',
    'Pi1',
    'Pressroom'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['pressroom_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'pressroom_pi1',
    'FILE:EXT:pressroom/Configuration/FlexForms/flexform_news.xml'
);



