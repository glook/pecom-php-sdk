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
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * Адрес забора
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Плановая дата забора
     *
     * @return \DateTime
     */
    public function getPlanPickupDate() : \DateTime
    {
        return $this->planPickupDate;
    }
    /**
     * Плановая дата забора
     *
     * @param \DateTime $planPickupDate
     *
     * @return self
     */
    public function setPlanPickupDate(\DateTime $planPickupDate) : self
    {
        $this->planPickupDate = $planPickupDate;
        return $this;
    }
}