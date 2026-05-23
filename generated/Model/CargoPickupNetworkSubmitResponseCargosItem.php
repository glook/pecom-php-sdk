<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitResponseCargosItem
{
    /**
     * Значение для штрих-кода в формате EAN-13.
     *
     * @var string
     */
    protected $barcode;

    /**
     * Код груза.
     *
     * @var string
     */
    protected $cargoCode;

    /**
     * Штрих-коды клиента.
     *
     * @var null|string[]
     */
    protected $clientPositionsBarcode;

    /**
     * Произвольное значение для синхронизации на стороне клиента.
     *
     * @var null|string
     */
    protected $customerCorrelation;

    /**
     * Номер заказа.
     *
     * @var null|string
     */
    protected $orderNumber;

    /**
     * Информация о местах.
     *
     * @var null|CargoPickupNetworkSubmitResponseCargosItemPositionsItem[]
     */
    protected $positions;

    /**
     * Тип штрих-кода.
     *
     * @var null|string
     */
    protected $typeClientBarcode;

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

    /**
     * Код груза.
     */
    public function getCargoCode(): string
    {
        return $this->cargoCode;
    }

    /**
     * Код груза.
     */
    public function setCargoCode(string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    /**
     * Штрих-коды клиента.
     *
     * @return null|string[]
     */
    public function getClientPositionsBarcode(): ?array
    {
        return $this->clientPositionsBarcode;
    }

    /**
     * Штрих-коды клиента.
     *
     * @param null|string[] $clientPositionsBarcode
     */
    public function setClientPositionsBarcode(?array $clientPositionsBarcode): self
    {
        $this->clientPositionsBarcode = $clientPositionsBarcode;

        return $this;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента.
     */
    public function getCustomerCorrelation(): ?string
    {
        return $this->customerCorrelation;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента.
     */
    public function setCustomerCorrelation(?string $customerCorrelation): self
    {
        $this->customerCorrelation = $customerCorrelation;

        return $this;
    }

    /**
     * Номер заказа.
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Номер заказа.
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Информация о местах.
     *
     * @return null|CargoPickupNetworkSubmitResponseCargosItemPositionsItem[]
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * Информация о местах.
     *
     * @param null|CargoPickupNetworkSubmitResponseCargosItemPositionsItem[] $positions
     */
    public function setPositions(?array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    /**
     * Тип штрих-кода.
     */
    public function getTypeClientBarcode(): ?string
    {
        return $this->typeClientBarcode;
    }

    /**
     * Тип штрих-кода.
     */
    public function setTypeClientBarcode(?string $typeClientBarcode): self
    {
        $this->typeClientBarcode = $typeClientBarcode;

        return $this;
    }
}
