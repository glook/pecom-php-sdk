<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupSubmitRequest
{
    /**
     * 
     *
     * @var CargoPickupBilling|null
     */
    protected $billing;
    /**
     * 
     *
     * @var CargoPickupCommon
     */
    protected $common;
    /**
     * 
     *
     * @var CargoPickupFile[]|null
     */
    protected $files;
    /**
     * 
     *
     * @var CargoPickupPayments|null
     */
    protected $payments;
    /**
     * 
     *
     * @var CargoPickupReceiver|null
     */
    protected $receiver;
    /**
     * 
     *
     * @var CargoPickupRefusalWarehouse|null
     */
    protected $refusalWarehouse;
    /**
     * 
     *
     * @var CargoPickupSender
     */
    protected $sender;
    /**
     * 
     *
     * @var CargoPickupServices
     */
    protected $services;
    /**
     * 
     *
     * @return CargoPickupBilling|null
     */
    public function getBilling() : ?CargoPickupBilling
    {
        return $this->billing;
    }
    /**
     * 
     *
     * @param CargoPickupBilling|null $billing
     *
     * @return self
     */
    public function setBilling(?CargoPickupBilling $billing) : self
    {
        $this->billing = $billing;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupCommon
     */
    public function getCommon() : CargoPickupCommon
    {
        return $this->common;
    }
    /**
     * 
     *
     * @param CargoPickupCommon $common
     *
     * @return self
     */
    public function setCommon(CargoPickupCommon $common) : self
    {
        $this->common = $common;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupFile[]|null
     */
    public function getFiles() : ?array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param CargoPickupFile[]|null $files
     *
     * @return self
     */
    public function setFiles(?array $files) : self
    {
        $this->files = $files;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupPayments|null
     */
    public function getPayments() : ?CargoPickupPayments
    {
        return $this->payments;
    }
    /**
     * 
     *
     * @param CargoPickupPayments|null $payments
     *
     * @return self
     */
    public function setPayments(?CargoPickupPayments $payments) : self
    {
        $this->payments = $payments;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupReceiver|null
     */
    public function getReceiver() : ?CargoPickupReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param CargoPickupReceiver|null $receiver
     *
     * @return self
     */
    public function setReceiver(?CargoPickupReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupRefusalWarehouse|null
     */
    public function getRefusalWarehouse() : ?CargoPickupRefusalWarehouse
    {
        return $this->refusalWarehouse;
    }
    /**
     * 
     *
     * @param CargoPickupRefusalWarehouse|null $refusalWarehouse
     *
     * @return self
     */
    public function setRefusalWarehouse(?CargoPickupRefusalWarehouse $refusalWarehouse) : self
    {
        $this->refusalWarehouse = $refusalWarehouse;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupSender
     */
    public function getSender() : CargoPickupSender
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param CargoPickupSender $sender
     *
     * @return self
     */
    public function setSender(CargoPickupSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupServices
     */
    public function getServices() : CargoPickupServices
    {
        return $this->services;
    }
    /**
     * 
     *
     * @param CargoPickupServices $services
     *
     * @return self
     */
    public function setServices(CargoPickupServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
}