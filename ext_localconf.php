<?php
defined('TYPO3_MODE') || die();

(static function() {


    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Pressroom',
        'Pi1',
        [
            \Polimi\Pressroom\Controller\PressroomController::class => 'list,listSito,listRicerca,detail,selectedList,dateMenu,searchForm,searchResult',
            \GeorgRinger\News\Controller\CategoryController::class => 'list',
            \GeorgRinger\News\Controller\TagController::class => 'list',
        ],
        [
            \Polimi\Pressroom\Controller\PressroomController::class => 'searchForm,searchResult',
        ]
    );


    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pressroom {
                        iconIdentifier = ext-news-type-default
                        title = Pressroom
                        description = Pressroom
                        tt_content_defValues {
                            CType = list
                            list_type = pressroom_pi1
                        }
                    }
                }
                show = *
            }
       }'
    );


    /***********
     * Extend EXT:news
     */

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'pressroom';
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Controller/NewsController'][] = 'pressroom';

//    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
//        \GeorgRinger\News\Domain\Service\NewsImportService::class,
//        'postHydrate',
//        \Polimi\Comunicatistampa\Aspect\NewsImportAspect::class,
//        'postHydrate'
//    );




    // Add an additional action: Key is "Controller->action", value is label

    //$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['Comunicatistampa->searchForm'] = 'Search Form Comunicatistampa';

    // Add an additional action: Key is "Controller->action", value is label
    //$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['Comunicatistampa->searchResult'] = 'Search Result Comunicatistampa';

    //$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['templateLayouts']['comunicatistampa'] = array('Search Form', '99');

    //$storagePidComunicatistapmpa = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    //)->get('pressrom', 'storagePidPressroom');

})();



