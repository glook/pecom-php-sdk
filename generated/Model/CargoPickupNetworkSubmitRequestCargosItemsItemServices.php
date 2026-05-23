<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServices
{
    /**
     * Доставка.
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery
     */
    protected $delivery;

    /**
     * Возврат документов.
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning
     */
    protected $documentsReturning;

    /**
     * Защитная транспортировочная упаковка.
     *
     * @var null|CargopickupnetworkServiceWithPayerAndPositions
     */
    protected $hardPacking;

    /**
     * Страховка.
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance
     */
    protected $insurance;

    /**
     * Услуга забора груза.
     *
     * @var null|CargopickupnetworkServicePayer
     */
    protected $pickUp;

    /**
     * Пломбировка.
     *
     * @var null|CargopickupnetworkServiceWithPayerAndPositions
     */
    protected $sealing;

    /**
     * Упаковка стреппинг-лентой.
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping
     */
    protected $strapping;

    /**
     * Перевозка.
     *
     * @var null|CargopickupnetworkServicePayer
     */
    protected $transporting;

    /**
     * Доставка.
     */
    public function getDelivery(): ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery
    {
        return $this->delivery;
    }

    /**
     * Доставка.
     */
    public function setDelivery(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Возврат документов.
     */
    public function getDocumentsReturning(): ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning
    {
        return $this->documentsReturning;
    }

    /**
     * Возврат документов.
     */
    public function setDocumentsReturning(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning $documentsReturning): self
    {
        $this->documentsReturning = $documentsReturning;

        return $this;
    }

    /**
     * Защитная транспортировочная упаковка.
     */
    public function getHardPacking(): ?CargopickupnetworkServiceWithPayerAndPositions
    {
        return $this->hardPacking;
    }

    /**
     * Защитная транспортировочная упаковка.
     */
    public function setHardPacking(?CargopickupnetworkServiceWithPayerAndPositions $hardPacking): self
    {
        $this->hardPacking = $hardPacking;

        return $this;
    }

    /**
     * Страховка.
     */
    public function getInsurance(): ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance
    {
        return $this->insurance;
    }

    /**
     * Страховка.
     */
    public function setInsurance(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * Услуга забора груза.
     */
    public function getPickUp(): ?CargopickupnetworkServicePayer
    {
        return $this->pickUp;
    }

    /**
     * Услуга забора груза.
     */
    public function setPickUp(?CargopickupnetworkServicePayer $pickUp): self
    {
        $this->pickUp = $pickUp;

        return $this;
    }

    /**
     * Пломбировка.
     */
    public function getSealing(): ?CargopickupnetworkServiceWithPayerAndPositions
    {
        return $this->sealing;
    }

    /**
     * Пломбировка.
     */
    public function setSealing(?CargopickupnetworkServiceWithPayerAndPositions $sealing): self
    {
        $this->sealing = $sealing;

        return $this;
    }

    /**
     * Упаковка стреппинг-лентой.
     */
    public function getStrapping(): ?CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping
    {
        return $this->strapping;
    }

    /**
     * Упаковка стреппинг-лентой.
     */
    public function setStrapping(?CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping $strapping): self
    {
        $this->strapping = $strapping;

        return $this;
    }

    /**
     * Перевозка.
     */
    public function getTransporting(): ?CargopickupnetworkServicePayer
    {
        return $this->transporting;
    }

    /**
     * Перевозка.
     */
    public function setTransporting(?CargopickupnetworkServicePayer $transporting): self
    {
        $this->transporting = $transporting;

        return $this;
    }
}
