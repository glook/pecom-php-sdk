<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopSubmittedCargo
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
     * @var string
     */
    protected $orderNumber;
    /**
     * 
     *
     * @var NetshopCargoPosition[]
     */
    protected $positions;
    /**
     * Наименование склада приема груза
     *
     * @var string|null
     */
    protected $stockTitle;
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
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->orderNumber;
    }
    /**
     * 
     *
     * @param string $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopCargoPosition[]
     */
    public function getPositions() : array
    {
        return $this->positions;
    }
    /**
     * 
     *
     * @param NetshopCargoPosition[] $positions
     *
     * @return self
     */
    public function setPositions(array $positions) : self
    {
        $this->positions = $positions;
        return $this;
    }
    /**
     * Наименование склада приема груза
     *
     * @return string|null
     */
    public function getStockTitle() : ?string
    {
        return $this->stockTitle;
    }
    /**
     * Наименование склада приема груза
     *
     * @param string|null $stockTitle
     *
     * @return self
     */
    public function setStockTitle(?string $stockTitle) : self
    {
        $this->stockTitle = $stockTitle;
        return $this;
    }
}