<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargos
{
    /**
     * Общие данные для всех позиций
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosCommon
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
     */
    public function getCommon(): ?CargoPickupNetworkSubmitRequestCargosCommon
    {
        return $this->common;
    }

    /**
     * Общие данные для всех позиций
     */
    public function setCommon(?CargoPickupNetworkSubmitRequestCargosCommon $common): self
    {
        $this->common = $common;

        return $this;
    }

    /**
     * Данные о грузах
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Данные о грузах
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItem[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
