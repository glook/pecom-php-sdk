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
     * 
     *
     * @var CargopickupnetworkPayer
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
     * 
     *
     * @return CargopickupnetworkPayer
     */
    public function getPayer() : CargopickupnetworkPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param CargopickupnetworkPayer $payer
     *
     * @return self
     */
    public function setPayer(CargopickupnetworkPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}