<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupCheckOrderedPickupType3CarResponse
{
    /**
     * 
     *
     * @var CargoPickupOrderItem[]
     */
    protected $orders;
    /**
     * 
     *
     * @return CargoPickupOrderItem[]
     */
    public function getOrders() : array
    {
        return $this->orders;
    }
    /**
     * 
     *
     * @param CargoPickupOrderItem[] $orders
     *
     * @return self
     */
    public function setOrders(array $orders) : self
    {
        $this->orders = $orders;
        return $this;
    }
}