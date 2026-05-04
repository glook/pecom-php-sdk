<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargos
{
    /**
     * Общие данные для всех позиций
     *
     * @var CargoPickupNetworkSubmitRequestCargosCommon|null
     */
    protected $common;
    /**
     * Данные о грузах
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItem[]
     */
    protected $items;
    /**
     * Общие данные для всех позиций
     *
     * @return CargoPickupNetworkSubmitRequestCargosCommon|null
     */
    public function getCommon() : ?CargoPickupNetworkSubmitRequestCargosCommon
    {
        return $this->common;
    }
    /**
     * Общие данные для всех позиций
     *
     * @param CargoPickupNetworkSubmitRequestCargosCommon|null $common
     *
     * @return self
     */
    public function setCommon(?CargoPickupNetworkSubmitRequestCargosCommon $common) : self
    {
        $this->common = $common;
        return $this;
    }
    /**
     * Данные о грузах
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Данные о грузах
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}