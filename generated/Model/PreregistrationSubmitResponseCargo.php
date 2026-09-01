<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseCargo
{
    /**
     * Значение для штрих-кода в формате EAN-13.
     *
     * @var null|string
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
     * @var null|string[]
     */
    protected $clientPositionsBarcode;

    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @var null|string
     */
    protected $customerCorrelation;

    /**
     * Номер заказа
     *
     * @var null|string
     */
    protected $orderNumber;

    /**
     * @var null|PreregistrationSubmitResponseCargoPosition[]
     */
    protected $positions;

    /**
     * @var PreregistrationSubmitResponseReceiver
     */
    protected $receiver;

    /**
     * Наименование склада приема груза, поле необязательно
     *
     * @var null|string
     */
    protected $stockTitle;

    /**
     * Значение для штрих-кода в формате EAN-13.
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Значение для штрих-кода в формате EAN-13.
     */
    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Код груза
     */
    public function getCargoCode(): string
    {
        return $this->cargoCode;
    }

    /**
     * Код груза
     */
    public function setCargoCode(string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    /**
     * Штрих-коды мест груза
     *
     * @return null|string[]
     */
    public function getClientPositionsBarcode(): ?array
    {
        return $this->clientPositionsBarcode;
    }

    /**
     * Штрих-коды мест груза
     *
     * @param null|string[] $clientPositionsBarcode
     */
    public function setClientPositionsBarcode(?array $clientPositionsBarcode): self
    {
        $this->clientPositionsBarcode = $clientPositionsBarcode;

        return $this;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента
     */
    public function getCustomerCorrelation(): ?string
    {
        return $this->customerCorrelation;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента
     */
    public function setCustomerCorrelation(?string $customerCorrelation): self
    {
        $this->customerCorrelation = $customerCorrelation;

        return $this;
    }

    /**
     * Номер заказа
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Номер заказа
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return null|PreregistrationSubmitResponseCargoPosition[]
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * @param null|PreregistrationSubmitResponseCargoPosition[] $positions
     */
    public function setPositions(?array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    public function getReceiver(): PreregistrationSubmitResponseReceiver
    {
        return $this->receiver;
    }

    public function setReceiver(PreregistrationSubmitResponseReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Наименование склада приема груза, поле необязательно
     */
    public function getStockTitle(): ?string
    {
        return $this->stockTitle;
    }

    /**
     * Наименование склада приема груза, поле необязательно
     */
    public function setStockTitle(?string $stockTitle): self
    {
        $this->stockTitle = $stockTitle;

        return $this;
    }
}
