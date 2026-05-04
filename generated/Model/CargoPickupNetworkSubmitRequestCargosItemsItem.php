<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItem
{
    /**
     * Параметры груза
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemCargo
     */
    protected $cargo;
    /**
     * Условия перевозки
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemConditions|null
     */
    protected $conditions;
    /**
     * Получатель
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemReceiver
     */
    protected $receiver;
    /**
     * Услуги
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemServices|null
     */
    protected $services;
    /**
     * Параметры груза
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemCargo
     */
    public function getCargo() : CargoPickupNetworkSubmitRequestCargosItemsItemCargo
    {
        return $this->cargo;
    }
    /**
     * Параметры груза
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemCargo $cargo
     *
     * @return self
     */
    public function setCargo(CargoPickupNetworkSubmitRequestCargosItemsItemCargo $cargo) : self
    {
        $this->cargo = $cargo;
        return $this;
    }
    /**
     * Условия перевозки
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemConditions|null
     */
    public function getConditions() : ?CargoPickupNetworkSubmitRequestCargosItemsItemConditions
    {
        return $this->conditions;
    }
    /**
     * Условия перевозки
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemConditions|null $conditions
     *
     * @return self
     */
    public function setConditions(?CargoPickupNetworkSubmitRequestCargosItemsItemConditions $conditions) : self
    {
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * Получатель
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemReceiver
     */
    public function getReceiver() : CargoPickupNetworkSubmitRequestCargosItemsItemReceiver
    {
        return $this->receiver;
    }
    /**
     * Получатель
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(CargoPickupNetworkSubmitRequestCargosItemsItemReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * Услуги
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemServices|null
     */
    public function getServices() : ?CargoPickupNetworkSubmitRequestCargosItemsItemServices
    {
        return $this->services;
    }
    /**
     * Услуги
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemServices|null $services
     *
     * @return self
     */
    public function setServices(?CargoPickupNetworkSubmitRequestCargosItemsItemServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
}