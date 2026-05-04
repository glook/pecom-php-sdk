<?php

namespace glook\PecomSdk\Generated\Model;

class CargoDetail
{
    /**
     * Фотографии
     *
     * @var CargoPhoto[]|null
     */
    protected $photos;
    /**
     * Количество мест
     *
     * @var int|null
     */
    protected $positionsCount;
    /**
     * Объём, м3
     *
     * @var float|null
     */
    protected $volume;
    /**
     * Вес, кг
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Фотографии
     *
     * @return CargoPhoto[]|null
     */
    public function getPhotos() : ?array
    {
        return $this->photos;
    }
    /**
     * Фотографии
     *
     * @param CargoPhoto[]|null $photos
     *
     * @return self
     */
    public function setPhotos(?array $photos) : self
    {
        $this->photos = $photos;
        return $this;
    }
    /**
     * Количество мест
     *
     * @return int|null
     */
    public function getPositionsCount() : ?int
    {
        return $this->positionsCount;
    }
    /**
     * Количество мест
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
     * Объём, м3
     *
     * @return float|null
     */
    public function getVolume() : ?float
    {
        return $this->volume;
    }
    /**
     * Объём, м3
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
     * Вес, кг
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Вес, кг
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