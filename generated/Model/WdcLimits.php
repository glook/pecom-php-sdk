<?php

namespace glook\PecomSdk\Generated\Model;

class WdcLimits
{
    /**
     * Максимальная высота грузоместа.
     *
     * @var float
     */
    protected $height;

    /**
     * Максимальная длина грузоместа.
     *
     * @var float
     */
    protected $length;

    /**
     * Максимальный габарит грузоместа.
     *
     * @var float
     */
    protected $maxLength;

    /**
     * Максимальный общий вес груза.
     *
     * @var float
     */
    protected $totalWeight;

    /**
     * Максимальный объем грузоместа.
     *
     * @var float
     */
    protected $volume;

    /**
     * Максимальный вес грузоместа.
     *
     * @var float
     */
    protected $weight;

    /**
     * Максимальная ширина грузоместа.
     *
     * @var float
     */
    protected $width;

    /**
     * Максимальная высота грузоместа.
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * Максимальная высота грузоместа.
     */
    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Максимальная длина грузоместа.
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Максимальная длина грузоместа.
     */
    public function setLength(float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Максимальный габарит грузоместа.
     */
    public function getMaxLength(): float
    {
        return $this->maxLength;
    }

    /**
     * Максимальный габарит грузоместа.
     */
    public function setMaxLength(float $maxLength): self
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    /**
     * Максимальный общий вес груза.
     */
    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }

    /**
     * Максимальный общий вес груза.
     */
    public function setTotalWeight(float $totalWeight): self
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    /**
     * Максимальный объем грузоместа.
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * Максимальный объем грузоместа.
     */
    public function setVolume(float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Максимальный вес грузоместа.
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Максимальный вес грузоместа.
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Максимальная ширина грузоместа.
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Максимальная ширина грузоместа.
     */
    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
