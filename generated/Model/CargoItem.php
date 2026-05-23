<?php

namespace glook\PecomSdk\Generated\Model;

class CargoItem
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
     * @var null|CargoPosition[]
     */
    protected $positions;

    /**
     * @var CargopickupCargoReceiver
     */
    protected $receiver;

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

    /**
     * @return null|CargoPosition[]
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * @param null|CargoPosition[] $positions
     */
    public function setPositions(?array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    public function getReceiver(): CargopickupCargoReceiver
    {
        return $this->receiver;
    }

    public function setReceiver(CargopickupCargoReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }
}
