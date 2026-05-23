<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupPayments
{
    /**
     * @var null|PaymentBlock
     */
    protected $delivery;

    /**
     * @var null|PaymentBlock
     */
    protected $hardPacking;

    /**
     * @var null|PaymentBlock
     */
    protected $insurance;

    /**
     * @var null|PaymentBlock
     */
    protected $moving;

    /**
     * @var null|PaymentBlock
     */
    protected $pickUp;

    /**
     * @var null|PaymentBlock
     */
    protected $sealing;

    /**
     * @var null|PaymentBlock
     */
    protected $strapping;

    public function getDelivery(): ?PaymentBlock
    {
        return $this->delivery;
    }

    public function setDelivery(?PaymentBlock $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getHardPacking(): ?PaymentBlock
    {
        return $this->hardPacking;
    }

    public function setHardPacking(?PaymentBlock $hardPacking): self
    {
        $this->hardPacking = $hardPacking;

        return $this;
    }

    public function getInsurance(): ?PaymentBlock
    {
        return $this->insurance;
    }

    public function setInsurance(?PaymentBlock $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    public function getMoving(): ?PaymentBlock
    {
        return $this->moving;
    }

    public function setMoving(?PaymentBlock $moving): self
    {
        $this->moving = $moving;

        return $this;
    }

    public function getPickUp(): ?PaymentBlock
    {
        return $this->pickUp;
    }

    public function setPickUp(?PaymentBlock $pickUp): self
    {
        $this->pickUp = $pickUp;

        return $this;
    }

    public function getSealing(): ?PaymentBlock
    {
        return $this->sealing;
    }

    public function setSealing(?PaymentBlock $sealing): self
    {
        $this->sealing = $sealing;

        return $this;
    }

    public function getStrapping(): ?PaymentBlock
    {
        return $this->strapping;
    }

    public function setStrapping(?PaymentBlock $strapping): self
    {
        $this->strapping = $strapping;

        return $this;
    }
}
