<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPayerOther
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
     * @var string
     */
    protected $phone;
    /**
     * 
     *
     * @var string
     */
    protected $title;
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
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}