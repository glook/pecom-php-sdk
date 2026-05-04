<?php

namespace glook\PecomSdk\Generated\Model;

class Cargo
{
    /**
     * Высота груза, м. Необязательно, если передан `maxSize`.
     *
     * @var float|null
     */
    protected $height;
    /**
     * Защитная транспортировочная упаковка. Необязательно. Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом — если хотя бы у одного грузоместа значение будет `true`, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     *
     * @var bool|null
     */
    protected $isHP;
    /**
     * Длина груза, м. Необязательно, если передан `maxSize`.
     *
     * @var float|null
     */
    protected $length;
    /**
     * Максимальный вес грузоместа. Необязательно. Рекомендуем передавать только в массиве с одним элементом для общих параметров всего груза.
     *
     * @var float|null
     */
    protected $maxPlaceWeight;
    /**
     * Максимальный габарит, м. Необязательно, если переданы длина, ширина, высота (которые имеют приоритет).
     *
     * @var float|null
     */
    protected $maxSize;
    /**
     * Количество мест для пломбировки — пломб (применяются для небольших мест или сложных грузов). Необязательно.
     *
     * @var int|null
     */
    protected $sealingPositionsCount;
    /**
     * Объем груза, м3. Необязательно, если переданы длина, ширина, высота.
     *
     * @var float|null
     */
    protected $volume;
    /**
     * Вес, кг. Обязательно.
     *
     * @var float
     */
    protected $weight;
    /**
     * Ширина груза, м. Необязательно, если передан `maxSize`.
     *
     * @var float|null
     */
    protected $width;
    /**
     * Высота груза, м. Необязательно, если передан `maxSize`.
     *
     * @return float|null
     */
    public function getHeight() : ?float
    {
        return $this->height;
    }
    /**
     * Высота груза, м. Необязательно, если передан `maxSize`.
     *
     * @param float|null $height
     *
     * @return self
     */
    public function setHeight(?float $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Защитная транспортировочная упаковка. Необязательно. Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом — если хотя бы у одного грузоместа значение будет `true`, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     *
     * @return bool|null
     */
    public function getIsHP() : ?bool
    {
        return $this->isHP;
    }
    /**
     * Защитная транспортировочная упаковка. Необязательно. Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом — если хотя бы у одного грузоместа значение будет `true`, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     *
     * @param bool|null $isHP
     *
     * @return self
     */
    public function setIsHP(?bool $isHP) : self
    {
        $this->isHP = $isHP;
        return $this;
    }
    /**
     * Длина груза, м. Необязательно, если передан `maxSize`.
     *
     * @return float|null
     */
    public function getLength() : ?float
    {
        return $this->length;
    }
    /**
     * Длина груза, м. Необязательно, если передан `maxSize`.
     *
     * @param float|null $length
     *
     * @return self
     */
    public function setLength(?float $length) : self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * Максимальный вес грузоместа. Необязательно. Рекомендуем передавать только в массиве с одним элементом для общих параметров всего груза.
     *
     * @return float|null
     */
    public function getMaxPlaceWeight() : ?float
    {
        return $this->maxPlaceWeight;
    }
    /**
     * Максимальный вес грузоместа. Необязательно. Рекомендуем передавать только в массиве с одним элементом для общих параметров всего груза.
     *
     * @param float|null $maxPlaceWeight
     *
     * @return self
     */
    public function setMaxPlaceWeight(?float $maxPlaceWeight) : self
    {
        $this->maxPlaceWeight = $maxPlaceWeight;
        return $this;
    }
    /**
     * Максимальный габарит, м. Необязательно, если переданы длина, ширина, высота (которые имеют приоритет).
     *
     * @return float|null
     */
    public function getMaxSize() : ?float
    {
        return $this->maxSize;
    }
    /**
     * Максимальный габарит, м. Необязательно, если переданы длина, ширина, высота (которые имеют приоритет).
     *
     * @param float|null $maxSize
     *
     * @return self
     */
    public function setMaxSize(?float $maxSize) : self
    {
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * Количество мест для пломбировки — пломб (применяются для небольших мест или сложных грузов). Необязательно.
     *
     * @return int|null
     */
    public function getSealingPositionsCount() : ?int
    {
        return $this->sealingPositionsCount;
    }
    /**
     * Количество мест для пломбировки — пломб (применяются для небольших мест или сложных грузов). Необязательно.
     *
     * @param int|null $sealingPositionsCount
     *
     * @return self
     */
    public function setSealingPositionsCount(?int $sealingPositionsCount) : self
    {
        $this->sealingPositionsCount = $sealingPositionsCount;
        return $this;
    }
    /**
     * Объем груза, м3. Необязательно, если переданы длина, ширина, высота.
     *
     * @return float|null
     */
    public function getVolume() : ?float
    {
        return $this->volume;
    }
    /**
     * Объем груза, м3. Необязательно, если переданы длина, ширина, высота.
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
     * Вес, кг. Обязательно.
     *
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }
    /**
     * Вес, кг. Обязательно.
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
     * Ширина груза, м. Необязательно, если передан `maxSize`.
     *
     * @return float|null
     */
    public function getWidth() : ?float
    {
        return $this->width;
    }
    /**
     * Ширина груза, м. Необязательно, если передан `maxSize`.
     *
     * @param float|null $width
     *
     * @return self
     */
    public function setWidth(?float $width) : self
    {
        $this->width = $width;
        return $this;
    }
}