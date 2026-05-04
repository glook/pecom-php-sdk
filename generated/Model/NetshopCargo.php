<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargo
{
    /**
     * 
     *
     * @var NetshopCargoCommon
     */
    protected $common;
    /**
     * 
     *
     * @var NetshopCargoReceiver
     */
    protected $receiver;
    /**
     * 
     *
     * @var NetshopCargoServices
     */
    protected $services;
    /**
     * 
     *
     * @return NetshopCargoCommon
     */
    public function getCommon() : NetshopCargoCommon
    {
        return $this->common;
    }
    /**
     * 
     *
     * @param NetshopCargoCommon $common
     *
     * @return self
     */
    public function setCommon(NetshopCargoCommon $common) : self
    {
        $this->common = $common;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopCargoReceiver
     */
    public function getReceiver() : NetshopCargoReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param NetshopCargoReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(NetshopCargoReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopCargoServices
     */
    public function getServices() : NetshopCargoServices
    {
        return $this->services;
    }
    /**
     * 
     *
     * @param NetshopCargoServices $services
     *
     * @return self
     */
    public function setServices(NetshopCargoServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
}