<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopReceiver
{
    /**
     * 
     *
     * @var string
     */
    protected $inn;
    /**
     * Название получателя
     *
     * @var string
     */
    protected $receiver;
    /**
     * 
     *
     * @var NetshopStore[]
     */
    protected $stores;
    /**
     * 
     *
     * @return string
     */
    public function getInn() : string
    {
        return $this->inn;
    }
    /**
     * 
     *
     * @param string $inn
     *
     * @return self
     */
    public function setInn(string $inn) : self
    {
        $this->inn = $inn;
        return $this;
    }
    /**
     * Название получателя
     *
     * @return string
     */
    public function getReceiver() : string
    {
        return $this->receiver;
    }
    /**
     * Название получателя
     *
     * @param string $receiver
     *
     * @return self
     */
    public function setReceiver(string $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopStore[]
     */
    public function getStores() : array
    {
        return $this->stores;
    }
    /**
     * 
     *
     * @param NetshopStore[] $stores
     *
     * @return self
     */
    public function setStores(array $stores) : self
    {
        $this->stores = $stores;
        return $this;
    }
}