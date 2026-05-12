<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopSubmitRequest
{
    /**
     * 
     *
     * @var NetshopCargo[]
     */
    protected $cargos;
    /**
     * 
     *
     * @var NetshopPickup|null
     */
    protected $pickup;
    /**
     * 
     *
     * @var NetshopSender
     */
    protected $sender;
    /**
     * 
     *
     * @return NetshopCargo[]
     */
    public function getCargos() : array
    {
        return $this->cargos;
    }
    /**
     * 
     *
     * @param NetshopCargo[] $cargos
     *
     * @return self
     */
    public function setCargos(array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopPickup|null
     */
    public function getPickup() : ?NetshopPickup
    {
        return $this->pickup;
    }
    /**
     * 
     *
     * @param NetshopPickup|null $pickup
     *
     * @return self
     */
    public function setPickup(?NetshopPickup $pickup) : self
    {
        $this->pickup = $pickup;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopSender
     */
    public function getSender() : NetshopSender
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param NetshopSender $sender
     *
     * @return self
     */
    public function setSender(NetshopSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
}