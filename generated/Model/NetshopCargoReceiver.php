<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargoReceiver
{
    /**
     * 
     *
     * @var NetshopIdentityCard|null
     */
    protected $identityCard;
    /**
     * 
     *
     * @var string|null
     */
    protected $inn;
    /**
     * 
     *
     * @var string|null
     */
    protected $phone;
    /**
     * код адреса получателя
     *
     * @var string
     */
    protected $receiverAddrCode;
    /**
     * 
     *
     * @return NetshopIdentityCard|null
     */
    public function getIdentityCard() : ?NetshopIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * 
     *
     * @param NetshopIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?NetshopIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * 
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn) : self
    {
        $this->inn = $inn;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * код адреса получателя
     *
     * @return string
     */
    public function getReceiverAddrCode() : string
    {
        return $this->receiverAddrCode;
    }
    /**
     * код адреса получателя
     *
     * @param string $receiverAddrCode
     *
     * @return self
     */
    public function setReceiverAddrCode(string $receiverAddrCode) : self
    {
        $this->receiverAddrCode = $receiverAddrCode;
        return $this;
    }
}