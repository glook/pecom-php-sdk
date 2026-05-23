<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosCommonCargoTotals
{
    /**
     * Максимальный габарит, м
     *
     * @var null|float
     */
    protected $maxDimension;

    /**
     * Общее количество мест, шт
     *
     * @var null|int
     */
    protected $positionsCount;

    /**
     * Общий объём, м³.
     *
     * @var null|float
     */
    protected $volume;

    /**
     * Общий вес, кг.
     *
     * @var null|float
     */
    protected $weight;

    /**
     * Максимальный габарит, м
     */
    public function getMaxDimension(): ?float
    {
        return $this->maxDimension;
    }

    /**
     * Максимальный габарит, м
     */
    public function setMaxDimension(?float $maxDimension): self
    {
        $this->maxDimension = $maxDimension;

        return $this;
    }

    /**
     * Общее количество мест, шт
     */
    public function getPositionsCount(): ?int
    {
        return $this->positionsCount;
    }

    /**
     * Общее количество мест, шт
     */
    public function setPositionsCount(?int $positionsCount): self
    {
        $this->positionsCount = $positionsCount;

        return $this;
    }

    /**
     * Общий объём, м³.
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Общий объём, м³.
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Общий вес, кг.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Общий вес, кг.
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
