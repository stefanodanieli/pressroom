<?php

namespace Polimi\Pressroom\Domain\Model\Dto;

use \GeorgRinger\News\Domain\Model\Dto\NewsDemand;

class PressroomDemand extends NewsDemand {

    /**
     * @var int
     */
    protected $ricerca = null;

    /**
     * Set myCustomField
     *
     * @param int $ricerca
     * @return NewsDemand
     */
    public function setRicerca(int $ricerca): NewsDemand
    {
        $this->ricerca = $ricerca;
        return $this;
    }

    /**
     * Get ricerca
     *
     * @return int
     */
    public function getRicerca(): int
    {
        return $this->ricerca;
    }

    protected $types = [4];


}