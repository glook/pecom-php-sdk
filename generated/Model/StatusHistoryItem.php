<?php

namespace glook\PecomSdk\Generated\Model;

class StatusHistoryItem
{
    /**
     * Код груза
     *
     * @var string|null
     */
    protected $cargoCode;
    /**
     * Все время в часовом поясе UTC + 3 часа
     *
     * @var StatusHistoryStatus[]|null
     */
    protected $statuses;
    /**
     * Код груза
     *
     * @return string|null
     */
    public function getCargoCode() : ?string
    {
        return $this->cargoCode;
    }
    /**
     * Код груза
     *
     * @param string|null $cargoCode
     *
     * @return self
     */
    public function setCargoCode(?string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
    /**
     * Все время в часовом поясе UTC + 3 часа
     *
     * @return StatusHistoryStatus[]|null
     */
    public function getStatuses() : ?array
    {
        return $this->statuses;
    }
    /**
     * Все время в часовом поясе UTC + 3 часа
     *
     * @param StatusHistoryStatus[]|null $statuses
     *
     * @return self
     */
    public function setStatuses(?array $statuses) : self
    {
        $this->statuses = $statuses;
        return $this;
    }
}