<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesCheckpickupdatePostBody
{
    /**
     * Адрес забора
     *
     * @var string
     */
    protected $address;

    /**
     * Плановая дата забора
     *
     * @var \DateTime
     */
    protected $planPickupDate;

    /**
     * Адрес забора
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Адрес забора
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Плановая дата забора
     */
    public function getPlanPickupDate(): \DateTime
    {
        return $this->planPickupDate;
    }

    /**
     * Плановая дата забора
     */
    public function setPlanPickupDate(\DateTime $planPickupDate): self
    {
        $this->planPickupDate = $planPickupDate;

        return $this;
    }
}
