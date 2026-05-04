<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServices
{
    /**
     * Доставка
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery|null
     */
    protected $delivery;
    /**
     * Возврат документов
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning|null
     */
    protected $documentsReturning;
    /**
     * Защитная транспортировочная упаковка
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesHardPacking|null
     */
    protected $hardPacking;
    /**
     * Страховка
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance|null
     */
    protected $insurance;
    /**
     * Услуга забора груза
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesPickUp|null
     */
    protected $pickUp;
    /**
     * Пломбировка
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesSealing|null
     */
    protected $sealing;
    /**
     * Упаковка стреппинг-лентой
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping|null
     */
    protected $strapping;
    /**
     * Перевозка
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServicesTransporting|null
     */
    protected $transporting;
    /**
     * Доставка
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery|null
     */
    public function getDelivery() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery
    {
        return $this->delivery;
    }
    /**
     * Доставка
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery|null $delivery
     *
     * @return self
     */
    public function setDelivery(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Возврат документов
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning|null
     */
    public function getDocumentsReturning() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning
    {
        return $this->documentsReturning;
    }
    /**
     * Возврат документов
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning|null $documentsReturning
     *
     * @return self
     */
    public function setDocumentsReturning(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning $documentsReturning) : self
    {
        $this->documentsReturning = $documentsReturning;
        return $this;
    }
    /**
     * Защитная транспортировочная упаковка
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesHardPacking|null
     */
    public function getHardPacking() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesHardPacking
    {
        return $this->hardPacking;
    }
    /**
     * Защитная транспортировочная упаковка
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesHardPacking|null $hardPacking
     *
     * @return self
     */
    public function setHardPacking(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesHardPacking $hardPacking) : self
    {
        $this->hardPacking = $hardPacking;
        return $this;
    }
    /**
     * Страховка
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance|null
     */
    public function getInsurance() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance
    {
        return $this->insurance;
    }
    /**
     * Страховка
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance|null $insurance
     *
     * @return self
     */
    public function setInsurance(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * Услуга забора груза
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesPickUp|null
     */
    public function getPickUp() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesPickUp
    {
        return $this->pickUp;
    }
    /**
     * Услуга забора груза
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesPickUp|null $pickUp
     *
     * @return self
     */
    public function setPickUp(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesPickUp $pickUp) : self
    {
        $this->pickUp = $pickUp;
        return $this;
    }
    /**
     * Пломбировка
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesSealing|null
     */
    public function getSealing() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesSealing
    {
        return $this->sealing;
    }
    /**
     * Пломбировка
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesSealing|null $sealing
     *
     * @return self
     */
    public function setSealing(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesSealing $sealing) : self
    {
        $this->sealing = $sealing;
        return $this;
    }
    /**
     * Упаковка стреппинг-лентой
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping|null
     */
    public function getStrapping() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping
    {
        return $this->strapping;
    }
    /**
     * Упаковка стреппинг-лентой
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping|null $strapping
     *
     * @return self
     */
    public function setStrapping(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping $strapping) : self
    {
        $this->strapping = $strapping;
        return $this;
    }
    /**
     * Перевозка
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServicesTransporting|null
     */
    public function getTransporting() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesTransporting
    {
        return $this->transporting;
    }
    /**
     * Перевозка
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServicesTransporting|null $transporting
     *
     * @return self
     */
    public function setTransporting(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesTransporting $transporting) : self
    {
        $this->transporting = $transporting;
        return $this;
    }
}