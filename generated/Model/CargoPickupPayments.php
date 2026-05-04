<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupPayments
{
    /**
     * 
     *
     * @var PaymentBlock
     */
    protected $delivery;
    /**
     * 
     *
     * @var PaymentBlock
     */
    protected $hardPacking;
    /**
     * 
     *
     * @var PaymentBlock
     */
    protected $insurance;
    /**
     * 
     *
     * @var PaymentBlock
     */
    protected $moving;
    /**
     * 
     *
     * @var PaymentBlock
     */
    protected $pickUp;
    /**
     * 
     *
     * @var PaymentBlock
     */
    protected $sealing;
    /**
     * 
     *
     * @var PaymentBlock
     */
    protected $strapping;
    /**
     * 
     *
     * @return PaymentBlock
     */
    public function getDelivery() : PaymentBlock
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param PaymentBlock $delivery
     *
     * @return self
     */
    public function setDelivery(PaymentBlock $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock
     */
    public function getHardPacking() : PaymentBlock
    {
        return $this->hardPacking;
    }
    /**
     * 
     *
     * @param PaymentBlock $hardPacking
     *
     * @return self
     */
    public function setHardPacking(PaymentBlock $hardPacking) : self
    {
        $this->hardPacking = $hardPacking;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock
     */
    public function getInsurance() : PaymentBlock
    {
        return $this->insurance;
    }
    /**
     * 
     *
     * @param PaymentBlock $insurance
     *
     * @return self
     */
    public function setInsurance(PaymentBlock $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock
     */
    public function getMoving() : PaymentBlock
    {
        return $this->moving;
    }
    /**
     * 
     *
     * @param PaymentBlock $moving
     *
     * @return self
     */
    public function setMoving(PaymentBlock $moving) : self
    {
        $this->moving = $moving;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock
     */
    public function getPickUp() : PaymentBlock
    {
        return $this->pickUp;
    }
    /**
     * 
     *
     * @param PaymentBlock $pickUp
     *
     * @return self
     */
    public function setPickUp(PaymentBlock $pickUp) : self
    {
        $this->pickUp = $pickUp;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock
     */
    public function getSealing() : PaymentBlock
    {
        return $this->sealing;
    }
    /**
     * 
     *
     * @param PaymentBlock $sealing
     *
     * @return self
     */
    public function setSealing(PaymentBlock $sealing) : self
    {
        $this->sealing = $sealing;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentBlock
     */
    public function getStrapping() : PaymentBlock
    {
        return $this->strapping;
    }
    /**
     * 
     *
     * @param PaymentBlock $strapping
     *
     * @return self
     */
    public function setStrapping(PaymentBlock $strapping) : self
    {
        $this->strapping = $strapping;
        return $this;
    }
}