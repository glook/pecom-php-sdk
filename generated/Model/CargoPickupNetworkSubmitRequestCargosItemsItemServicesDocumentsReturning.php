<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning
{
    /**
     * Заказана ли услуга
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Плательщик
     *
     * @var CargopickupnetworkPayer|null
     */
    protected $payer;
    /**
     * Заказана ли услуга
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Заказана ли услуга
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
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