<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationServices
{
    /**
     * 
     *
     * @var ServiceCashOnDelivery|null
     */
    protected $cashOnDelivery;
    /**
     * 
     *
     * @var ServiceDelivery|null
     */
    protected $delivery;
    /**
     * 
     *
     * @var ServiceToggle|null
     */
    protected $documentsReturning;
    /**
     * Email для бухгалтерских уведомлений
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var ServiceWithPayer|null
     */
    protected $hardPacking;
    /**
     * 
     *
     * @var ServiceInsurance|null
     */
    protected $insurance;
    /**
     * 
     *
     * @var ServicePickUp|null
     */
    protected $pickUp;
    /**
     * 
     *
     * @var ServiceWithPayer|null
     */
    protected $sealing;
    /**
     * 
     *
     * @var ServiceToggle|null
     */
    protected $storing;
    /**
     * 
     *
     * @var ServiceWithPayer|null
     */
    protected $strapping;
    /**
     * 
     *
     * @var ServiceTransporting|null
     */
    protected $transporting;
    /**
     * 
     *
     * @return ServiceCashOnDelivery|null
     */
    public function getCashOnDelivery() : ?ServiceCashOnDelivery
    {
        return $this->cashOnDelivery;
    }
    /**
     * 
     *
     * @param ServiceCashOnDelivery|null $cashOnDelivery
     *
     * @return self
     */
    public function setCashOnDelivery(?ServiceCashOnDelivery $cashOnDelivery) : self
    {
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceDelivery|null
     */
    public function getDelivery() : ?ServiceDelivery
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param ServiceDelivery|null $delivery
     *
     * @return self
     */
    public function setDelivery(?ServiceDelivery $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceToggle|null
     */
    public function getDocumentsReturning() : ?ServiceToggle
    {
        return $this->documentsReturning;
    }
    /**
     * 
     *
     * @param ServiceToggle|null $documentsReturning
     *
     * @return self
     */
    public function setDocumentsReturning(?ServiceToggle $documentsReturning) : self
    {
        $this->documentsReturning = $documentsReturning;
        return $this;
    }
    /**
     * Email для бухгалтерских уведомлений
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Email для бухгалтерских уведомлений
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceWithPayer|null
     */
    public function getHardPacking() : ?ServiceWithPayer
    {
        return $this->hardPacking;
    }
    /**
     * 
     *
     * @param ServiceWithPayer|null $hardPacking
     *
     * @return self
     */
    public function setHardPacking(?ServiceWithPayer $hardPacking) : self
    {
        $this->hardPacking = $hardPacking;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceInsurance|null
     */
    public function getInsurance() : ?ServiceInsurance
    {
        return $this->insurance;
    }
    /**
     * 
     *
     * @param ServiceInsurance|null $insurance
     *
     * @return self
     */
    public function setInsurance(?ServiceInsurance $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * 
     *
     * @return ServicePickUp|null
     */
    public function getPickUp() : ?ServicePickUp
    {
        return $this->pickUp;
    }
    /**
     * 
     *
     * @param ServicePickUp|null $pickUp
     *
     * @return self
     */
    public function setPickUp(?ServicePickUp $pickUp) : self
    {
        $this->pickUp = $pickUp;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceWithPayer|null
     */
    public function getSealing() : ?ServiceWithPayer
    {
        return $this->sealing;
    }
    /**
     * 
     *
     * @param ServiceWithPayer|null $sealing
     *
     * @return self
     */
    public function setSealing(?ServiceWithPayer $sealing) : self
    {
        $this->sealing = $sealing;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceToggle|null
     */
    public function getStoring() : ?ServiceToggle
    {
        return $this->storing;
    }
    /**
     * 
     *
     * @param ServiceToggle|null $storing
     *
     * @return self
     */
    public function setStoring(?ServiceToggle $storing) : self
    {
        $this->storing = $storing;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceWithPayer|null
     */
    public function getStrapping() : ?ServiceWithPayer
    {
        return $this->strapping;
    }
    /**
     * 
     *
     * @param ServiceWithPayer|null $strapping
     *
     * @return self
     */
    public function setStrapping(?ServiceWithPayer $strapping) : self
    {
        $this->strapping = $strapping;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceTransporting|null
     */
    public function getTransporting() : ?ServiceTransporting
    {
        return $this->transporting;
    }
    /**
     * 
     *
     * @param ServiceTransporting|null $transporting
     *
     * @return self
     */
    public function setTransporting(?ServiceTransporting $transporting) : self
    {
        $this->transporting = $transporting;
        return $this;
    }
}