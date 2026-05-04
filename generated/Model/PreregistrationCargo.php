<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCargo
{
    /**
     * 
     *
     * @var PreregistrationCargoCommon
     */
    protected $common;
    /**
     * 
     *
     * @var PreregistrationReceiver
     */
    protected $receiver;
    /**
     * 
     *
     * @var PreregistrationRefusalWarehouse
     */
    protected $refusalWarehouse;
    /**
     * 
     *
     * @var PreregistrationServices
     */
    protected $services;
    /**
     * 
     *
     * @return PreregistrationCargoCommon
     */
    public function getCommon() : PreregistrationCargoCommon
    {
        return $this->common;
    }
    /**
     * 
     *
     * @param PreregistrationCargoCommon $common
     *
     * @return self
     */
    public function setCommon(PreregistrationCargoCommon $common) : self
    {
        $this->common = $common;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationReceiver
     */
    public function getReceiver() : PreregistrationReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param PreregistrationReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(PreregistrationReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationRefusalWarehouse
     */
    public function getRefusalWarehouse() : PreregistrationRefusalWarehouse
    {
        return $this->refusalWarehouse;
    }
    /**
     * 
     *
     * @param PreregistrationRefusalWarehouse $refusalWarehouse
     *
     * @return self
     */
    public function setRefusalWarehouse(PreregistrationRefusalWarehouse $refusalWarehouse) : self
    {
        $this->refusalWarehouse = $refusalWarehouse;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationServices
     */
    public function getServices() : PreregistrationServices
    {
        return $this->services;
    }
    /**
     * 
     *
     * @param PreregistrationServices $services
     *
     * @return self
     */
    public function setServices(PreregistrationServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
}