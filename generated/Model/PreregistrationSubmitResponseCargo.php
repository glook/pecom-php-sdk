<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseCargo
{
    /**
     * Значение для штрих-кода в формате EAN-13.
     *
     * @var string|null
     */
    protected $barcode;
    /**
     * Код груза
     *
     * @var string
     */
    protected $cargoCode;
    /**
     * Штрих-коды мест груза
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
     * 
     *
     * @var PreregistrationSubmitResponseCargoPosition[]|null
     */
    protected $positions;
    /**
     * 
     *
     * @var PreregistrationSubmitResponseReceiver
     */
    protected $receiver;
    /**
     * Наименование склада приема груза, поле необязательно
     *
     * @var string|null
     */
    protected $stockTitle;
    /**
     * Значение для штрих-кода в формате EAN-13.
     *
     * @return string|null
     */
    public function getBarcode() : ?string
    {
        return $this->barcode;
    }
    /**
     * Значение для штрих-кода в формате EAN-13.
     *
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode) : self
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
     * Штрих-коды мест груза
     *
     * @return string[]|null
     */
    public function getClientPositionsBarcode() : ?array
    {
        return $this->clientPositionsBarcode;
    }
    /**
     * Штрих-коды мест груза
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
     * 
     *
     * @return PreregistrationSubmitResponseCargoPosition[]|null
     */
    public function getPositions() : ?array
    {
        return $this->positions;
    }
    /**
     * 
     *
     * @param PreregistrationSubmitResponseCargoPosition[]|null $positions
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
     * @return PreregistrationSubmitResponseReceiver
     */
    public function getReceiver() : PreregistrationSubmitResponseReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param PreregistrationSubmitResponseReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(PreregistrationSubmitResponseReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * Наименование склада приема груза, поле необязательно
     *
     * @return string|null
     */
    public function getStockTitle() : ?string
    {
        return $this->stockTitle;
    }
    /**
     * Наименование склада приема груза, поле необязательно
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