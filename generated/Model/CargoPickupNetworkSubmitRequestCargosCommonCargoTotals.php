<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosCommonCargoTotals
{
    /**
     * Максимальный габарит, м
     *
     * @var float|null
     */
    protected $maxDimension;
    /**
     * Общее количество мест, шт
     *
     * @var int|null
     */
    protected $positionsCount;
    /**
     * Общий объём, м³
     *
     * @var float|null
     */
    protected $volume;
    /**
     * Общий вес, кг
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Максимальный габарит, м
     *
     * @return float|null
     */
    public function getMaxDimension() : ?float
    {
        return $this->maxDimension;
    }
    /**
     * Максимальный габарит, м
     *
     * @param float|null $maxDimension
     *
     * @return self
     */
    public function setMaxDimension(?float $maxDimension) : self
    {
        $this->maxDimension = $maxDimension;
        return $this;
    }
    /**
     * Общее количество мест, шт
     *
     * @return int|null
     */
    public function getPositionsCount() : ?int
    {
        return $this->positionsCount;
    }
    /**
     * Общее количество мест, шт
     *
     * @param int|null $positionsCount
     *
     * @return self
     */
    public function setPositionsCount(?int $positionsCount) : self
    {
        $this->positionsCount = $positionsCount;
        return $this;
    }
    /**
     * Общий объём, м³
     *
     * @return float|null
     */
    public function getVolume() : ?float
    {
        return $this->volume;
    }
    /**
     * Общий объём, м³
     *
     * @param float|null $volume
     *
     * @return self
     */
    public function setVolume(?float $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * Общий вес, кг
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Общий вес, кг
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
}