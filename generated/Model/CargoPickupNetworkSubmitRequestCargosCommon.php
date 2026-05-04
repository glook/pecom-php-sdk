<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosCommon
{
    /**
     * Общие размеры, объём и весь груза
     *
     * @var CargoPickupNetworkSubmitRequestCargosCommonCargoTotals|null
     */
    protected $cargoTotals;
    /**
     * Определение плательщиков для всех грузов
     *
     * @var CargoPickupNetworkSubmitRequestCargosCommonServices|null
     */
    protected $services;
    /**
     * Тип штрих-кодов, указанных для мест грузов заявки
     *
     * @var string|null
     */
    protected $typeClientBarcode;
    /**
     * Общие размеры, объём и весь груза
     *
     * @return CargoPickupNetworkSubmitRequestCargosCommonCargoTotals|null
     */
    public function getCargoTotals() : ?CargoPickupNetworkSubmitRequestCargosCommonCargoTotals
    {
        return $this->cargoTotals;
    }
    /**
     * Общие размеры, объём и весь груза
     *
     * @param CargoPickupNetworkSubmitRequestCargosCommonCargoTotals|null $cargoTotals
     *
     * @return self
     */
    public function setCargoTotals(?CargoPickupNetworkSubmitRequestCargosCommonCargoTotals $cargoTotals) : self
    {
        $this->cargoTotals = $cargoTotals;
        return $this;
    }
    /**
     * Определение плательщиков для всех грузов
     *
     * @return CargoPickupNetworkSubmitRequestCargosCommonServices|null
     */
    public function getServices() : ?CargoPickupNetworkSubmitRequestCargosCommonServices
    {
        return $this->services;
    }
    /**
     * Определение плательщиков для всех грузов
     *
     * @param CargoPickupNetworkSubmitRequestCargosCommonServices|null $services
     *
     * @return self
     */
    public function setServices(?CargoPickupNetworkSubmitRequestCargosCommonServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
    /**
     * Тип штрих-кодов, указанных для мест грузов заявки
     *
     * @return string|null
     */
    public function getTypeClientBarcode() : ?string
    {
        return $this->typeClientBarcode;
    }
    /**
     * Тип штрих-кодов, указанных для мест грузов заявки
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