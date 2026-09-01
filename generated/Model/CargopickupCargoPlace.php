<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupCargoPlace
{
    /**
     * Высота одного места, м
     *
     * @var float
     */
    protected $height;

    /**
     * Длина одного места, м
     *
     * @var float
     */
    protected $length;

    /**
     * Количество мест одинаковых габаритов
     *
     * @var int
     */
    protected $quantity;

    /**
     * Вес одного места, кг
     *
     * @var float
     */
    protected $weight;

    /**
     * Ширина одного места, м
     *
     * @var float
     */
    protected $width;

    /**
     * Высота одного места, м
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * Высота одного места, м
     */
    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Длина одного места, м
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Длина одного места, м
     */
    public function setLength(float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Количество мест одинаковых габаритов
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Количество мест одинаковых габаритов
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Вес одного места, кг
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Вес одного места, кг
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Ширина одного места, м
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Ширина одного места, м
     */
    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
