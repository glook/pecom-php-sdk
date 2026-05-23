<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopSubmittedCargo
{
    /**
     * Значение для штрих-кода в формате EAN-13.
     *
     * @var string
     */
    protected $barcode;

    /**
     * @var string
     */
    protected $cargoCode;

    /**
     * @var string
     */
    protected $orderNumber;

    /**
     * @var NetshopCargoPosition[]
     */
    protected $positions;

    /**
     * Наименование склада приема груза.
     *
     * @var null|string
     */
    protected $stockTitle;

    /**
     * Значение для штрих-кода в формате EAN-13.
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * Значение для штрих-кода в формате EAN-13.
     */
    public function setBarcode(string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getCargoCode(): string
    {
        return $this->cargoCode;
    }

    public function setCargoCode(string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return NetshopCargoPosition[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    /**
     * @param NetshopCargoPosition[] $positions
     */
    public function setPositions(array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    /**
     * Наименование склада приема груза.
     */
    public function getStockTitle(): ?string
    {
        return $this->stockTitle;
    }

    /**
     * Наименование склада приема груза.
     */
    public function setStockTitle(?string $stockTitle): self
    {
        $this->stockTitle = $stockTitle;

        return $this;
    }
}
