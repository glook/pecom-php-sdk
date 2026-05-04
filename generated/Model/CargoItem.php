<?php

namespace glook\PecomSdk\Generated\Model;

class CargoItem
{
    /**
     * Значение для штрих-кода в формате EAN-13
     *
     * @var string
     */
    protected $barcode;
    /**
     * 
     *
     * @var string
     */
    protected $cargoCode;
    /**
     * 
     *
     * @var CargoPosition[]|null
     */
    protected $positions;
    /**
     * 
     *
     * @var CargopickupCargoReceiver
     */
    protected $receiver;
    /**
     * Значение для штрих-кода в формате EAN-13
     *
     * @return string
     */
    public function getBarcode() : string
    {
        return $this->barcode;
    }
    /**
     * Значение для штрих-кода в формате EAN-13
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode(string $barcode) : self
    {
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCargoCode() : string
    {
        return $this->cargoCode;
    }
    /**
     * 
     *
     * @param string $cargoCode
     *
     * @return self
     */
    public function setCargoCode(string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPosition[]|null
     */
    public function getPositions() : ?array
    {
        return $this->positions;
    }
    /**
     * 
     *
     * @param CargoPosition[]|null $positions
     *
     * @return self
     */
    public function setPositions(?array $positions) : self
    {
        $this->positions = $positions;
        return $this;
    }
    /**
     * 
     *
     * @return CargopickupCargoReceiver
     */
    public function getReceiver() : CargopickupCargoReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param CargopickupCargoReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(CargopickupCargoReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
}