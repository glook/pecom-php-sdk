<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesPickUp
{
    /**
     * Плательщик
     *
     * @var CargopickupnetworkPayer|null
     */
    protected $payer;
    /**
     * Плательщик
     *
     * @return CargopickupnetworkPayer|null
     */
    public function getPayer() : ?CargopickupnetworkPayer
    {
        return $this->payer;
    }
    /**
     * Плательщик
     *
     * @param CargopickupnetworkPayer|null $payer
     *
     * @return self
     */
    public function setPayer(?CargopickupnetworkPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}