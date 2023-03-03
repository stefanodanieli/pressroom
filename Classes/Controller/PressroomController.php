<?php

declare(strict_types=1);

namespace Polimiacre\Pressroom\Controller;

use GeorgRinger\News\Controller\NewsController;
use GeorgRinger\News\Domain\Model\Dto\NewsDemand;
use GeorgRinger\News\Domain\Model\Dto\Search;
use GeorgRinger\News\Event\NewsSearchFormActionEvent;
use GeorgRinger\News\Event\NewsSearchResultActionEvent;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use GeorgRinger\News\Domain\Repository\NewsRepository;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Context\Context;

/**
 * This file is part of the "pressroom" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * PressroomController
 */
class PressroomController extends  NewsController
{

    /**
     * pressroomRepository
     *
     * @var \Polimiacre\Pressroom\Domain\Repository\PressroomRepository
     */
    protected $pressroomRepository = null;

    /**
     * @param \Polimiacre\Pressroom\Domain\Repository\PressroomRepository $pressroomRepository
     */
    public function injectPressroomRepository(\Polimiacre\Pressroom\Domain\Repository\PressroomRepository $pressroomRepository)
    {
        $this->pressroomRepository = $pressroomRepository;
    }

    public function initializeAction()

    {
        parent::initializeAction();
        if ($this->extConfiguration === null) {
            $this->extConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(ExtensionConfiguration::class)
                ->get('pressroom');
        }
    }

    /**
     * @var \GeorgRinger\News\Domain\Repository\NewsRepository $newsRepository
     *
     */
    protected $newsRepository;

}
