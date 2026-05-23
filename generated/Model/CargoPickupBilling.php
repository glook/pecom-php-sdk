<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupBilling
{
    /**
     * @var null|BillingNumber[]
     */
    protected $billingNumbers;

    /**
     * @return null|BillingNumber[]
     */
    public function getBillingNumbers(): ?array
    {
        return $this->billingNumbers;
    }

    /**
     * @param null|BillingNumber[] $billingNumbers
     */
    public function setBillingNumbers(?array $billingNumbers): self
    {
        $this->billingNumbers = $billingNumbers;

        return $this;
    }
}
