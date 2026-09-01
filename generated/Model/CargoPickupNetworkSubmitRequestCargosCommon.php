<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosCommon
{
    /**
     * Общие размеры, объём и весь груза
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosCommonCargoTotals
     */
    protected $cargoTotals;

    /**
     * Определение плательщиков для всех грузов
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosCommonServices
     */
    protected $services;

    /**
     * Тип штрих-кодов, указанных для мест грузов заявки
     *
     * @var null|string
     */
    protected $typeClientBarcode;

    /**
     * Общие размеры, объём и весь груза
     */
    public function getCargoTotals(): ?CargoPickupNetworkSubmitRequestCargosCommonCargoTotals
    {
        return $this->cargoTotals;
    }

    /**
     * Общие размеры, объём и весь груза
     */
    public function setCargoTotals(?CargoPickupNetworkSubmitRequestCargosCommonCargoTotals $cargoTotals): self
    {
        $this->cargoTotals = $cargoTotals;

        return $this;
    }

    /**
     * Определение плательщиков для всех грузов
     */
    public function getServices(): ?CargoPickupNetworkSubmitRequestCargosCommonServices
    {
        return $this->services;
    }

    /**
     * Определение плательщиков для всех грузов
     */
    public function setServices(?CargoPickupNetworkSubmitRequestCargosCommonServices $services): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Тип штрих-кодов, указанных для мест грузов заявки
     */
    public function getTypeClientBarcode(): ?string
    {
        return $this->typeClientBarcode;
    }

    /**
     * Тип штрих-кодов, указанных для мест грузов заявки
     */
    public function setTypeClientBarcode(?string $typeClientBarcode): self
    {
        $this->typeClientBarcode = $typeClientBarcode;

        return $this;
    }
}
