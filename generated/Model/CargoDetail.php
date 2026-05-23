<?php

namespace glook\PecomSdk\Generated\Model;

class CargoDetail
{
    /**
     * Фотографии.
     *
     * @var null|CargoPhoto[]
     */
    protected $photos;

    /**
     * Количество мест
     *
     * @var null|int
     */
    protected $positionsCount;

    /**
     * Объём, м3.
     *
     * @var null|float
     */
    protected $volume;

    /**
     * Вес, кг.
     *
     * @var null|float
     */
    protected $weight;

    /**
     * Фотографии.
     *
     * @return null|CargoPhoto[]
     */
    public function getPhotos(): ?array
    {
        return $this->photos;
    }

    /**
     * Фотографии.
     *
     * @param null|CargoPhoto[] $photos
     */
    public function setPhotos(?array $photos): self
    {
        $this->photos = $photos;

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

    /**
     * Объём, м3.
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Объём, м3.
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Вес, кг.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Вес, кг.
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
