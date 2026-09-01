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
     * @var null|CargoPickupNetworkSubmitRequestCargosItemsItemConditions
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
     * @var null|CargoPickupNetworkSubmitRequestCargosItemsItemServices
     */
    protected $services;

    /**
     * Параметры груза
     */
    public function getCargo(): CargoPickupNetworkSubmitRequestCargosItemsItemCargo
    {
        return $this->cargo;
    }

    /**
     * Параметры груза
     */
    public function setCargo(CargoPickupNetworkSubmitRequestCargosItemsItemCargo $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Условия перевозки
     */
    public function getConditions(): ?CargoPickupNetworkSubmitRequestCargosItemsItemConditions
    {
        return $this->conditions;
    }

    /**
     * Условия перевозки
     */
    public function setConditions(?CargoPickupNetworkSubmitRequestCargosItemsItemConditions $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Получатель
     */
    public function getReceiver(): CargoPickupNetworkSubmitRequestCargosItemsItemReceiver
    {
        return $this->receiver;
    }

    /**
     * Получатель
     */
    public function setReceiver(CargoPickupNetworkSubmitRequestCargosItemsItemReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Услуги
     */
    public function getServices(): ?CargoPickupNetworkSubmitRequestCargosItemsItemServices
    {
        return $this->services;
    }

    /**
     * Услуги
     */
    public function setServices(?CargoPickupNetworkSubmitRequestCargosItemsItemServices $services): self
    {
        $this->services = $services;

        return $this;
    }
}
