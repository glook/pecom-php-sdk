<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupPayments
{
    /**
     * 
     *
     * @var PaymentBlock|null
     */
    protected $delivery;
    /**
     * 
     *
     * @var PaymentBlock|null
     */
    protected $hardPacking;
    /**
     * 
     *
     * @var PaymentBlock|null
     */
    protected $insurance;
    /**
     * 
     *
     * @var PaymentBlock|null
     */
    protected $moving;
    /**
     * 
     *
     * @var PaymentBlock|null
     */
    protected $pickUp;
    /**
     * 
     *
     * @var PaymentBlock|null
     */
    protected $sealing;
    /**
     * 
     *
     * @var PaymentBlock|null
     */
    protected $strapping;
    /**
     * 
     *
     * @return PaymentBlock|null
     */
    public function getDelivery() : ?PaymentBlock
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param PaymentBlock|null $delivery
     *
     * @return self
     */
    public function setDelivery(?PaymentBlock $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock|null
     */
    public function getHardPacking() : ?PaymentBlock
    {
        return $this->hardPacking;
    }
    /**
     * 
     *
     * @param PaymentBlock|null $hardPacking
     *
     * @return self
     */
    public function setHardPacking(?PaymentBlock $hardPacking) : self
    {
        $this->hardPacking = $hardPacking;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock|null
     */
    public function getInsurance() : ?PaymentBlock
    {
        return $this->insurance;
    }
    /**
     * 
     *
     * @param PaymentBlock|null $insurance
     *
     * @return self
     */
    public function setInsurance(?PaymentBlock $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock|null
     */
    public function getMoving() : ?PaymentBlock
    {
        return $this->moving;
    }
    /**
     * 
     *
     * @param PaymentBlock|null $moving
     *
     * @return self
     */
    public function setMoving(?PaymentBlock $moving) : self
    {
        $this->moving = $moving;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock|null
     */
    public function getPickUp() : ?PaymentBlock
    {
        return $this->pickUp;
    }
    /**
     * 
     *
     * @param PaymentBlock|null $pickUp
     *
     * @return self
     */
    public function setPickUp(?PaymentBlock $pickUp) : self
    {
        $this->pickUp = $pickUp;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock|null
     */
    public function getSealing() : ?PaymentBlock
    {
        return $this->sealing;
    }
    /**
     * 
     *
     * @param PaymentBlock|null $sealing
     *
     * @return self
     */
    public function setSealing(?PaymentBlock $sealing) : self
    {
        $this->sealing = $sealing;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock|null
     */
    public function getStrapping() : ?PaymentBlock
    {
        return $this->strapping;
    }
    /**
     * 
     *
     * @param PaymentBlock|null $strapping
     *
     * @return self
     */
    public function setStrapping(?PaymentBlock $strapping) : self
    {
        $this->strapping = $strapping;
        return $this;
    }
}