<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationServices
{
    /**
     * 
     *
     * @var ServiceCashOnDelivery
     */
    protected $cashOnDelivery;
    /**
     * 
     *
     * @var ServiceDelivery
     */
    protected $delivery;
    /**
     * 
     *
     * @var ServiceToggle
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
     * @var ServiceWithPayer
     */
    protected $hardPacking;
    /**
     * 
     *
     * @var ServiceInsurance
     */
    protected $insurance;
    /**
     * 
     *
     * @var ServicePickUp
     */
    protected $pickUp;
    /**
     * 
     *
     * @var ServiceWithPayer
     */
    protected $sealing;
    /**
     * 
     *
     * @var ServiceToggle
     */
    protected $storing;
    /**
     * 
     *
     * @var ServiceWithPayer
     */
    protected $strapping;
    /**
     * 
     *
     * @var ServiceTransporting
     */
    protected $transporting;
    /**
     * 
     *
     * @return ServiceCashOnDelivery
     */
    public function getCashOnDelivery() : ServiceCashOnDelivery
    {
        return $this->cashOnDelivery;
    }
    /**
     * 
     *
     * @param ServiceCashOnDelivery $cashOnDelivery
     *
     * @return self
     */
    public function setCashOnDelivery(ServiceCashOnDelivery $cashOnDelivery) : self
    {
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceDelivery
     */
    public function getDelivery() : ServiceDelivery
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param ServiceDelivery $delivery
     *
     * @return self
     */
    public function setDelivery(ServiceDelivery $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceToggle
     */
    public function getDocumentsReturning() : ServiceToggle
    {
        return $this->documentsReturning;
    }
    /**
     * 
     *
     * @param ServiceToggle $documentsReturning
     *
     * @return self
     */
    public function setDocumentsReturning(ServiceToggle $documentsReturning) : self
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
     * @return ServiceWithPayer
     */
    public function getHardPacking() : ServiceWithPayer
    {
        return $this->hardPacking;
    }
    /**
     * 
     *
     * @param ServiceWithPayer $hardPacking
     *
     * @return self
     */
    public function setHardPacking(ServiceWithPayer $hardPacking) : self
    {
        $this->hardPacking = $hardPacking;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceInsurance
     */
    public function getInsurance() : ServiceInsurance
    {
        return $this->insurance;
    }
    /**
     * 
     *
     * @param ServiceInsurance $insurance
     *
     * @return self
     */
    public function setInsurance(ServiceInsurance $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * 
     *
     * @return ServicePickUp
     */
    public function getPickUp() : ServicePickUp
    {
        return $this->pickUp;
    }
    /**
     * 
     *
     * @param ServicePickUp $pickUp
     *
     * @return self
     */
    public function setPickUp(ServicePickUp $pickUp) : self
    {
        $this->pickUp = $pickUp;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceWithPayer
     */
    public function getSealing() : ServiceWithPayer
    {
        return $this->sealing;
    }
    /**
     * 
     *
     * @param ServiceWithPayer $sealing
     *
     * @return self
     */
    public function setSealing(ServiceWithPayer $sealing) : self
    {
        $this->sealing = $sealing;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceToggle
     */
    public function getStoring() : ServiceToggle
    {
        return $this->storing;
    }
    /**
     * 
     *
     * @param ServiceToggle $storing
     *
     * @return self
     */
    public function setStoring(ServiceToggle $storing) : self
    {
        $this->storing = $storing;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceWithPayer
     */
    public function getStrapping() : ServiceWithPayer
    {
        return $this->strapping;
    }
    /**
     * 
     *
     * @param ServiceWithPayer $strapping
     *
     * @return self
     */
    public function setStrapping(ServiceWithPayer $strapping) : self
    {
        $this->strapping = $strapping;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceTransporting
     */
    public function getTransporting() : ServiceTransporting
    {
        return $this->transporting;
    }
    /**
     * 
     *
     * @param ServiceTransporting $transporting
     *
     * @return self
     */
    public function setTransporting(ServiceTransporting $transporting) : self
    {
        $this->transporting = $transporting;
        return $this;
    }
}