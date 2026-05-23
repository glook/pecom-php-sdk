<?php

namespace glook\PecomSdk\Generated\Model;

class Cargo
{
    /**
     * Высота груза, м. Необязательно, если передан `maxSize`.
     *
     * @var null|float
     */
    protected $height;

    /**
     * Защитная транспортировочная упаковка. Необязательно. Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом — если хотя бы у одного грузоместа значение будет `true`, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     *
     * @var null|bool
     */
    protected $isHP;

    /**
     * Длина груза, м. Необязательно, если передан `maxSize`.
     *
     * @var null|float
     */
    protected $length;

    /**
     * Максимальный вес грузоместа. Необязательно. Рекомендуем передавать только в массиве с одним элементом для общих параметров всего груза.
     *
     * @var null|float
     */
    protected $maxPlaceWeight;

    /**
     * Максимальный габарит, м. Необязательно, если переданы длина, ширина, высота (которые имеют приоритет).
     *
     * @var null|float
     */
    protected $maxSize;

    /**
     * Количество мест для пломбировки — пломб (применяются для небольших мест или сложных грузов). Необязательно.
     *
     * @var null|int
     */
    protected $sealingPositionsCount;

    /**
     * Объем груза, м3. Необязательно, если переданы длина, ширина, высота.
     *
     * @var null|float
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
     * @var null|float
     */
    protected $width;

    /**
     * Высота груза, м. Необязательно, если передан `maxSize`.
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * Высота груза, м. Необязательно, если передан `maxSize`.
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Защитная транспортировочная упаковка. Необязательно. Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом — если хотя бы у одного грузоместа значение будет `true`, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     */
    public function getIsHP(): ?bool
    {
        return $this->isHP;
    }

    /**
     * Защитная транспортировочная упаковка. Необязательно. Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом — если хотя бы у одного грузоместа значение будет `true`, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     */
    public function setIsHP(?bool $isHP): self
    {
        $this->isHP = $isHP;

        return $this;
    }

    /**
     * Длина груза, м. Необязательно, если передан `maxSize`.
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * Длина груза, м. Необязательно, если передан `maxSize`.
     */
    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Максимальный вес грузоместа. Необязательно. Рекомендуем передавать только в массиве с одним элементом для общих параметров всего груза.
     */
    public function getMaxPlaceWeight(): ?float
    {
        return $this->maxPlaceWeight;
    }

    /**
     * Максимальный вес грузоместа. Необязательно. Рекомендуем передавать только в массиве с одним элементом для общих параметров всего груза.
     */
    public function setMaxPlaceWeight(?float $maxPlaceWeight): self
    {
        $this->maxPlaceWeight = $maxPlaceWeight;

        return $this;
    }

    /**
     * Максимальный габарит, м. Необязательно, если переданы длина, ширина, высота (которые имеют приоритет).
     */
    public function getMaxSize(): ?float
    {
        return $this->maxSize;
    }

    /**
     * Максимальный габарит, м. Необязательно, если переданы длина, ширина, высота (которые имеют приоритет).
     */
    public function setMaxSize(?float $maxSize): self
    {
        $this->maxSize = $maxSize;

        return $this;
    }

    /**
     * Количество мест для пломбировки — пломб (применяются для небольших мест или сложных грузов). Необязательно.
     */
    public function getSealingPositionsCount(): ?int
    {
        return $this->sealingPositionsCount;
    }

    /**
     * Количество мест для пломбировки — пломб (применяются для небольших мест или сложных грузов). Необязательно.
     */
    public function setSealingPositionsCount(?int $sealingPositionsCount): self
    {
        $this->sealingPositionsCount = $sealingPositionsCount;

        return $this;
    }

    /**
     * Объем груза, м3. Необязательно, если переданы длина, ширина, высота.
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Объем груза, м3. Необязательно, если переданы длина, ширина, высота.
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Вес, кг. Обязательно.
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Вес, кг. Обязательно.
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Ширина груза, м. Необязательно, если передан `maxSize`.
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * Ширина груза, м. Необязательно, если передан `maxSize`.
     */
    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
