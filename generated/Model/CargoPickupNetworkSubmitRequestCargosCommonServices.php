<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosCommonServices
{
    /**
     * Плательщик за услугу доставки
     *
     * @var CargoPickupNetworkSubmitRequestCargosCommonServicesDelivery|null
     */
    protected $delivery;
    /**
     * Плательщик за услугу страхования
     *
     * @var CargoPickupNetworkSubmitRequestCargosCommonServicesInsurance|null
     */
    protected $insurance;
    /**
     * Плательщик за услугу забора груза
     *
     * @var CargoPickupNetworkSubmitRequestCargosCommonServicesPickUp|null
     */
    protected $pickUp;
    /**
     * Плательщик за услугу перевозки
     *
     * @var CargoPickupNetworkSubmitRequestCargosCommonServicesTransporting|null
     */
    protected $transporting;
    /**
     * Плательщик за услугу доставки
     *
     * @return CargoPickupNetworkSubmitRequestCargosCommonServicesDelivery|null
     */
    public function getDelivery() : ?CargoPickupNetworkSubmitRequestCargosCommonServicesDelivery
    {
        return $this->delivery;
    }
    /**
     * Плательщик за услугу доставки
     *
     * @param CargoPickupNetworkSubmitRequestCargosCommonServicesDelivery|null $delivery
     *
     * @return self
     */
    public function setDelivery(?CargoPickupNetworkSubmitRequestCargosCommonServicesDelivery $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Плательщик за услугу страхования
     *
     * @return CargoPickupNetworkSubmitRequestCargosCommonServicesInsurance|null
     */
    public function getInsurance() : ?CargoPickupNetworkSubmitRequestCargosCommonServicesInsurance
    {
        return $this->insurance;
    }
    /**
     * Плательщик за услугу страхования
     *
     * @param CargoPickupNetworkSubmitRequestCargosCommonServicesInsurance|null $insurance
     *
     * @return self
     */
    public function setInsurance(?CargoPickupNetworkSubmitRequestCargosCommonServicesInsurance $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * Плательщик за услугу забора груза
     *
     * @return CargoPickupNetworkSubmitRequestCargosCommonServicesPickUp|null
     */
    public function getPickUp() : ?CargoPickupNetworkSubmitRequestCargosCommonServicesPickUp
    {
        return $this->pickUp;
    }
    /**
     * Плательщик за услугу забора груза
     *
     * @param CargoPickupNetworkSubmitRequestCargosCommonServicesPickUp|null $pickUp
     *
     * @return self
     */
    public function setPickUp(?CargoPickupNetworkSubmitRequestCargosCommonServicesPickUp $pickUp) : self
    {
        $this->pickUp = $pickUp;
        return $this;
    }
    /**
     * Плательщик за услугу перевозки
     *
     * @return CargoPickupNetworkSubmitRequestCargosCommonServicesTransporting|null
     */
    public function getTransporting() : ?CargoPickupNetworkSubmitRequestCargosCommonServicesTransporting
    {
        return $this->transporting;
    }
    /**
     * Плательщик за услугу перевозки
     *
     * @param CargoPickupNetworkSubmitRequestCargosCommonServicesTransporting|null $transporting
     *
     * @return self
     */
    public function setTransporting(?CargoPickupNetworkSubmitRequestCargosCommonServicesTransporting $transporting) : self
    {
        $this->transporting = $transporting;
        return $this;
    }
}