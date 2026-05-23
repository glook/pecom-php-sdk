<?php

namespace glook\PecomSdk\Generated\Model;

class BillingNumber
{
    /**
     * @var null|string
     */
    protected $billingNo;

    /**
     * @var null|float
     */
    protected $billingSum;

    public function getBillingNo(): ?string
    {
        return $this->billingNo;
    }

    public function setBillingNo(?string $billingNo): self
    {
        $this->billingNo = $billingNo;

        return $this;
    }

    public function getBillingSum(): ?float
    {
        return $this->billingSum;
    }

    public function setBillingSum(?float $billingSum): self
    {
        $this->billingSum = $billingSum;

        return $this;
    }
}
