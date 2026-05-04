<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupBilling
{
    /**
     * 
     *
     * @var BillingNumber[]|null
     */
    protected $billingNumbers;
    /**
     * 
     *
     * @return BillingNumber[]|null
     */
    public function getBillingNumbers() : ?array
    {
        return $this->billingNumbers;
    }
    /**
     * 
     *
     * @param BillingNumber[]|null $billingNumbers
     *
     * @return self
     */
    public function setBillingNumbers(?array $billingNumbers) : self
    {
        $this->billingNumbers = $billingNumbers;
        return $this;
    }
}