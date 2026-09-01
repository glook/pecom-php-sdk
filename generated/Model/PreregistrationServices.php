<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationServices
{
    /**
     * @var null|ServiceCashOnDelivery
     */
    protected $cashOnDelivery;

    /**
     * @var null|ServiceDelivery
     */
    protected $delivery;

    /**
     * @var null|ServiceToggle
     */
    protected $documentsReturning;

    /**
     * Email для бухгалтерских уведомлений
     *
     * @var null|string
     */
    protected $email;

    /**
     * @var null|ServiceWithPayer
     */
    protected $hardPacking;

    /**
     * @var null|ServiceInsurance
     */
    protected $insurance;

    /**
     * @var null|ServicePickUp
     */
    protected $pickUp;

    /**
     * @var null|ServiceWithPayer
     */
    protected $sealing;

    /**
     * @var null|ServiceToggle
     */
    protected $storing;

    /**
     * @var null|ServiceWithPayer
     */
    protected $strapping;

    /**
     * @var null|ServiceTransporting
     */
    protected $transporting;

    public function getCashOnDelivery(): ?ServiceCashOnDelivery
    {
        return $this->cashOnDelivery;
    }

    public function setCashOnDelivery(?ServiceCashOnDelivery $cashOnDelivery): self
    {
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    public function getDelivery(): ?ServiceDelivery
    {
        return $this->delivery;
    }

    public function setDelivery(?ServiceDelivery $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getDocumentsReturning(): ?ServiceToggle
    {
        return $this->documentsReturning;
    }

    public function setDocumentsReturning(?ServiceToggle $documentsReturning): self
    {
        $this->documentsReturning = $documentsReturning;

        return $this;
    }

    /**
     * Email для бухгалтерских уведомлений
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email для бухгалтерских уведомлений
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getHardPacking(): ?ServiceWithPayer
    {
        return $this->hardPacking;
    }

    public function setHardPacking(?ServiceWithPayer $hardPacking): self
    {
        $this->hardPacking = $hardPacking;

        return $this;
    }

    public function getInsurance(): ?ServiceInsurance
    {
        return $this->insurance;
    }

    public function setInsurance(?ServiceInsurance $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    public function getPickUp(): ?ServicePickUp
    {
        return $this->pickUp;
    }

    public function setPickUp(?ServicePickUp $pickUp): self
    {
        $this->pickUp = $pickUp;

        return $this;
    }

    public function getSealing(): ?ServiceWithPayer
    {
        return $this->sealing;
    }

    public function setSealing(?ServiceWithPayer $sealing): self
    {
        $this->sealing = $sealing;

        return $this;
    }

    public function getStoring(): ?ServiceToggle
    {
        return $this->storing;
    }

    public function setStoring(?ServiceToggle $storing): self
    {
        $this->storing = $storing;

        return $this;
    }

    public function getStrapping(): ?ServiceWithPayer
    {
        return $this->strapping;
    }

    public function setStrapping(?ServiceWithPayer $strapping): self
    {
        $this->strapping = $strapping;

        return $this;
    }

    public function getTransporting(): ?ServiceTransporting
    {
        return $this->transporting;
    }

    public function setTransporting(?ServiceTransporting $transporting): self
    {
        $this->transporting = $transporting;

        return $this;
    }
}
