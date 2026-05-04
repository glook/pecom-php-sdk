<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosCommonServicesDelivery
{
    /**
     * 
     *
     * @var CargopickupnetworkPayer
     */
    protected $payer;
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