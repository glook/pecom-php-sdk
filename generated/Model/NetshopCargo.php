<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargo
{
    /**
     * @var NetshopCargoCommon
     */
    protected $common;

    /**
     * @var NetshopCargoReceiver
     */
    protected $receiver;

    /**
     * @var NetshopCargoServices
     */
    protected $services;

    public function getCommon(): NetshopCargoCommon
    {
        return $this->common;
    }

    public function setCommon(NetshopCargoCommon $common): self
    {
        $this->common = $common;

        return $this;
    }

    public function getReceiver(): NetshopCargoReceiver
    {
        return $this->receiver;
    }

    public function setReceiver(NetshopCargoReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getServices(): NetshopCargoServices
    {
        return $this->services;
    }

    public function setServices(NetshopCargoServices $services): self
    {
        $this->services = $services;

        return $this;
    }
}
