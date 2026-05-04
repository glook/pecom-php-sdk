<?php

namespace glook\PecomSdk\Generated\Model;

class WdcLimits
{
    /**
     * Максимальная высота грузоместа
     *
     * @var float
     */
    protected $height;
    /**
     * Максимальная длина грузоместа
     *
     * @var float
     */
    protected $length;
    /**
     * Максимальный габарит грузоместа
     *
     * @var float
     */
    protected $maxLength;
    /**
     * Максимальный общий вес груза
     *
     * @var float
     */
    protected $totalWeight;
    /**
     * Максимальный объем грузоместа
     *
     * @var float
     */
    protected $volume;
    /**
     * Максимальный вес грузоместа
     *
     * @var float
     */
    protected $weight;
    /**
     * Максимальная ширина грузоместа
     *
     * @var float
     */
    protected $width;
    /**
     * Максимальная высота грузоместа
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * Максимальная высота грузоместа
     *
     * @param float $height
     *
     * @return self
     */
    public function setHeight(float $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Максимальная длина грузоместа
     *
     * @return float
     */
    public function getLength() : float
    {
        return $this->length;
    }
    /**
     * Максимальная длина грузоместа
     *
     * @param float $length
     *
     * @return self
     */
    public function setLength(float $length) : self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * Максимальный габарит грузоместа
     *
     * @return float
     */
    public function getMaxLength() : float
    {
        return $this->maxLength;
    }
    /**
     * Максимальный габарит грузоместа
     *
     * @param float $maxLength
     *
     * @return self
     */
    public function setMaxLength(float $maxLength) : self
    {
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * Максимальный общий вес груза
     *
     * @return float
     */
    public function getTotalWeight() : float
    {
        return $this->totalWeight;
    }
    /**
     * Максимальный общий вес груза
     *
     * @param float $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(float $totalWeight) : self
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Максимальный объем грузоместа
     *
     * @return float
     */
    public function getVolume() : float
    {
        return $this->volume;
    }
    /**
     * Максимальный объем грузоместа
     *
     * @param float $volume
     *
     * @return self
     */
    public function setVolume(float $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * Максимальный вес грузоместа
     *
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }
    /**
     * Максимальный вес грузоместа
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Максимальная ширина грузоместа
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->width;
    }
    /**
     * Максимальная ширина грузоместа
     *
     * @param float $width
     *
     * @return self
     */
    public function setWidth(float $width) : self
    {
        $this->width = $width;
        return $this;
    }
}