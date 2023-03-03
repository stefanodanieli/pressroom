<?php

declare(strict_types=1);

namespace Polimiacre\Pressroom\Domain\Model;


/**
 * This file is part of the "pressroom" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * Pressroom
 */
class Pressroom extends \GeorgRinger\News\Domain\Model\News
{

    /**
     * id
     *
     * @var int
     */
    protected $id = 0;

    /**
     * Returns the id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @var string
     */
    protected $locationSimple;

    /**
     * @return string
     */
    public function getLocationSimple() {
        return $this->locationSimple;
    }

    /**
     * @param string $locationSimple
     */
    public function setLocationSimple($locationSimple) {
        $this->locationSimple = $locationSimple;
    }

    /**
     * ricerca
     *
     * @var int
     */
    protected $ricerca = 0;

    /**
     * @return int
     */
    public function getRicerca(): int
    {
        return $this->ricerca;
    }

    /**
     * @param int $ricerca
     */
    public function setRicerca(int $ricerca): void
    {
        $this->ricerca = $ricerca;
    }


}
