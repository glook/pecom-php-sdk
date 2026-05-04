<?php

namespace glook\PecomSdk\Generated\Model;

class BillingNumber
{
    /**
     * 
     *
     * @var string|null
     */
    protected $billingNo;
    /**
     * 
     *
     * @var float|null
     */
    protected $billingSum;
    /**
     * 
     *
     * @return string|null
     */
    public function getBillingNo() : ?string
    {
        return $this->billingNo;
    }
    /**
     * 
     *
     * @param string|null $billingNo
     *
     * @return self
     */
    public function setBillingNo(?string $billingNo) : self
    {
        $this->billingNo = $billingNo;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBillingSum() : ?float
    {
        return $this->billingSum;
    }
    /**
     * 
     *
     * @param float|null $billingSum
     *
     * @return self
     */
    public function setBillingSum(?float $billingSum) : self
    {
        $this->billingSum = $billingSum;
        return $this;
    }
}