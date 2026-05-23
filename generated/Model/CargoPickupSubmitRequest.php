<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupSubmitRequest
{
    /**
     * @var null|CargoPickupBilling
     */
    protected $billing;

    /**
     * @var CargoPickupCommon
     */
    protected $common;

    /**
     * @var null|CargoPickupFile[]
     */
    protected $files;

    /**
     * @var null|CargoPickupPayments
     */
    protected $payments;

    /**
     * @var null|CargoPickupReceiver
     */
    protected $receiver;

    /**
     * @var null|CargoPickupRefusalWarehouse
     */
    protected $refusalWarehouse;

    /**
     * @var CargoPickupSender
     */
    protected $sender;

    /**
     * @var CargoPickupServices
     */
    protected $services;

    public function getBilling(): ?CargoPickupBilling
    {
        return $this->billing;
    }

    public function setBilling(?CargoPickupBilling $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    public function getCommon(): CargoPickupCommon
    {
        return $this->common;
    }

    public function setCommon(CargoPickupCommon $common): self
    {
        $this->common = $common;

        return $this;
    }

    /**
     * @return null|CargoPickupFile[]
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * @param null|CargoPickupFile[] $files
     */
    public function setFiles(?array $files): self
    {
        $this->files = $files;

        return $this;
    }

    public function getPayments(): ?CargoPickupPayments
    {
        return $this->payments;
    }

    public function setPayments(?CargoPickupPayments $payments): self
    {
        $this->payments = $payments;

        return $this;
    }

    public function getReceiver(): ?CargoPickupReceiver
    {
        return $this->receiver;
    }

    public function setReceiver(?CargoPickupReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getRefusalWarehouse(): ?CargoPickupRefusalWarehouse
    {
        return $this->refusalWarehouse;
    }

    public function setRefusalWarehouse(?CargoPickupRefusalWarehouse $refusalWarehouse): self
    {
        $this->refusalWarehouse = $refusalWarehouse;

        return $this;
    }

    public function getSender(): CargoPickupSender
    {
        return $this->sender;
    }

    public function setSender(CargoPickupSender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getServices(): CargoPickupServices
    {
        return $this->services;
    }

    public function setServices(CargoPickupServices $services): self
    {
        $this->services = $services;

        return $this;
    }
}
