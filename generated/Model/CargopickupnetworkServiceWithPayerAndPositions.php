<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupnetworkServiceWithPayerAndPositions
{
    /**
     * Заказана ли услуга.
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Плательщик.
     *
     * @var null|CargopickupnetworkPayer
     */
    protected $payer;

    /**
     * Количество мест
     *
     * @var null|int
     */
    protected $positionsCount;

    /**
     * Заказана ли услуга.
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Заказана ли услуга.
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Плательщик.
     */
    public function getPayer(): ?CargopickupnetworkPayer
    {
        return $this->payer;
    }

    /**
     * Плательщик.
     */
    public function setPayer(?CargopickupnetworkPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Количество мест
     */
    public function getPositionsCount(): ?int
    {
        return $this->positionsCount;
    }

    /**
     * Количество мест
     */
    public function setPositionsCount(?int $positionsCount): self
    {
        $this->positionsCount = $positionsCount;

        return $this;
    }
}
