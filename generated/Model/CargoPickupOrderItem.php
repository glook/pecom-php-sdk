<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupOrderItem
{
    /**
     * Номер груза / трек-номер
     *
     * @var string
     */
    protected $order;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderAddressStock;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderInn;
    /**
     * 
     *
     * @var string|null
     */
    protected $senderTitle;
    /**
     * Статус операции забора
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var float
     */
    protected $volume;
    /**
     * 
     *
     * @var float
     */
    protected $weight;
    /**
     * Номер груза / трек-номер
     *
     * @return string
     */
    public function getOrder() : string
    {
        return $this->order;
    }
    /**
     * Номер груза / трек-номер
     *
     * @param string $order
     *
     * @return self
     */
    public function setOrder(string $order) : self
    {
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderAddressStock() : ?string
    {
        return $this->senderAddressStock;
    }
    /**
     * 
     *
     * @param string|null $senderAddressStock
     *
     * @return self
     */
    public function setSenderAddressStock(?string $senderAddressStock) : self
    {
        $this->senderAddressStock = $senderAddressStock;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderCity() : ?string
    {
        return $this->senderCity;
    }
    /**
     * 
     *
     * @param string|null $senderCity
     *
     * @return self
     */
    public function setSenderCity(?string $senderCity) : self
    {
        $this->senderCity = $senderCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderInn() : ?string
    {
        return $this->senderInn;
    }
    /**
     * 
     *
     * @param string|null $senderInn
     *
     * @return self
     */
    public function setSenderInn(?string $senderInn) : self
    {
        $this->senderInn = $senderInn;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSenderTitle() : ?string
    {
        return $this->senderTitle;
    }
    /**
     * 
     *
     * @param string|null $senderTitle
     *
     * @return self
     */
    public function setSenderTitle(?string $senderTitle) : self
    {
        $this->senderTitle = $senderTitle;
        return $this;
    }
    /**
     * Статус операции забора
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Статус операции забора
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getVolume() : float
    {
        return $this->volume;
    }
    /**
     * 
     *
     * @param float $volume
     *
     * @return self
     */
    public function setVolume(float $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
}