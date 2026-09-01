<?php

namespace glook\PecomSdk\Generated\Model;

class StatusHistoryItem
{
    /**
     * Код груза
     *
     * @var null|string
     */
    protected $cargoCode;

    /**
     * Все время в часовом поясе UTC + 3 часа
     *
     * @var null|StatusHistoryStatus[]
     */
    protected $statuses;

    /**
     * Код груза
     */
    public function getCargoCode(): ?string
    {
        return $this->cargoCode;
    }

    /**
     * Код груза
     */
    public function setCargoCode(?string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    /**
     * Все время в часовом поясе UTC + 3 часа
     *
     * @return null|StatusHistoryStatus[]
     */
    public function getStatuses(): ?array
    {
        return $this->statuses;
    }

    /**
     * Все время в часовом поясе UTC + 3 часа
     *
     * @param null|StatusHistoryStatus[] $statuses
     */
    public function setStatuses(?array $statuses): self
    {
        $this->statuses = $statuses;

        return $this;
    }
}
