<?php

namespace Polimi\Pressroom\Domain\Model\Dto;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * News Demand object which holds all information to get the correct
 * news records.
 */
class Search extends \GeorgRinger\News\Domain\Model\Dto\Search
{

    public function toArray()
    {
        return [

            'subject' => $this->subject,
            'fields' => $this->fields,
            'minimumDate' => $this->minimumDate,
            'maximumDate' => $this->maximumDate,
            'dateField' => $this->dateField,
            'splitSubjectWords' => $this->splitSubjectWords,
        ];
    }

}
