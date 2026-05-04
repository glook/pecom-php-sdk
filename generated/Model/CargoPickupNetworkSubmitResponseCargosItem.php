<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitResponseCargosItem
{
    /**
     * Значение для штрих-кода в формате EAN-13
     *
     * @var string
     */
    protected $barcode;
    /**
     * Код груза
     *
     * @var string
     */
    protected $cargoCode;
    /**
     * Штрих-коды клиента
     *
     * @var string[]|null
     */
    protected $clientPositionsBarcode;
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @var string|null
     */
    protected $customerCorrelation;
    /**
     * Номер заказа
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * Информация о местах
     *
     * @var CargoPickupNetworkSubmitResponseCargosItemPositionsItem[]|null
     */
    protected $positions;
    /**
     * Тип штрих-кода
     *
     * @var string|null
     */
    protected $typeClientBarcode;
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
     * Код груза
     *
     * @return string
     */
    public function getCargoCode() : string
    {
        return $this->cargoCode;
    }
    /**
     * Код груза
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
     * Штрих-коды клиента
     *
     * @return string[]|null
     */
    public function getClientPositionsBarcode() : ?array
    {
        return $this->clientPositionsBarcode;
    }
    /**
     * Штрих-коды клиента
     *
     * @param string[]|null $clientPositionsBarcode
     *
     * @return self
     */
    public function setClientPositionsBarcode(?array $clientPositionsBarcode) : self
    {
        $this->clientPositionsBarcode = $clientPositionsBarcode;
        return $this;
    }
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @return string|null
     */
    public function getCustomerCorrelation() : ?string
    {
        return $this->customerCorrelation;
    }
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @param string|null $customerCorrelation
     *
     * @return self
     */
    public function setCustomerCorrelation(?string $customerCorrelation) : self
    {
        $this->customerCorrelation = $customerCorrelation;
        return $this;
    }
    /**
     * Номер заказа
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Номер заказа
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * Информация о местах
     *
     * @return CargoPickupNetworkSubmitResponseCargosItemPositionsItem[]|null
     */
    public function getPositions() : ?array
    {
        return $this->positions;
    }
    /**
     * Информация о местах
     *
     * @param CargoPickupNetworkSubmitResponseCargosItemPositionsItem[]|null $positions
     *
     * @return self
     */
    public function setPositions(?array $positions) : self
    {
        $this->positions = $positions;
        return $this;
    }
    /**
     * Тип штрих-кода
     *
     * @return string|null
     */
    public function getTypeClientBarcode() : ?string
    {
        return $this->typeClientBarcode;
    }
    /**
     * Тип штрих-кода
     *
     * @param string|null $typeClientBarcode
     *
     * @return self
     */
    public function setTypeClientBarcode(?string $typeClientBarcode) : self
    {
        $this->typeClientBarcode = $typeClientBarcode;
        return $this;
    }
}