<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesCheckpickupdatePostResponse200
{
    /**
     * Забор с адреса возможен
     *
     * @var bool
     */
    protected $addressAvailable;
    /**
     * Массив доступных дат после указанной
     *
     * @var \DateTime[]
     */
    protected $availablePickupDatesAfter;
    /**
     * Массив доступных дат до указанной
     *
     * @var \DateTime[]
     */
    protected $availablePickupDatesBefore;
    /**
     * Забор на указанную дату возможен
     *
     * @var bool
     */
    protected $pickupDateAvailable;
    /**
     * Забор с адреса возможен
     *
     * @return bool
     */
    public function getAddressAvailable() : bool
    {
        return $this->addressAvailable;
    }
    /**
     * Забор с адреса возможен
     *
     * @param bool $addressAvailable
     *
     * @return self
     */
    public function setAddressAvailable(bool $addressAvailable) : self
    {
        $this->addressAvailable = $addressAvailable;
        return $this;
    }
    /**
     * Массив доступных дат после указанной
     *
     * @return \DateTime[]
     */
    public function getAvailablePickupDatesAfter() : array
    {
        return $this->availablePickupDatesAfter;
    }
    /**
     * Массив доступных дат после указанной
     *
     * @param \DateTime[] $availablePickupDatesAfter
     *
     * @return self
     */
    public function setAvailablePickupDatesAfter(array $availablePickupDatesAfter) : self
    {
        $this->availablePickupDatesAfter = $availablePickupDatesAfter;
        return $this;
    }
    /**
     * Массив доступных дат до указанной
     *
     * @return \DateTime[]
     */
    public function getAvailablePickupDatesBefore() : array
    {
        return $this->availablePickupDatesBefore;
    }
    /**
     * Массив доступных дат до указанной
     *
     * @param \DateTime[] $availablePickupDatesBefore
     *
     * @return self
     */
    public function setAvailablePickupDatesBefore(array $availablePickupDatesBefore) : self
    {
        $this->availablePickupDatesBefore = $availablePickupDatesBefore;
        return $this;
    }
    /**
     * Забор на указанную дату возможен
     *
     * @return bool
     */
    public function getPickupDateAvailable() : bool
    {
        return $this->pickupDateAvailable;
    }
    /**
     * Забор на указанную дату возможен
     *
     * @param bool $pickupDateAvailable
     *
     * @return self
     */
    public function setPickupDateAvailable(bool $pickupDateAvailable) : self
    {
        $this->pickupDateAvailable = $pickupDateAvailable;
        return $this;
    }
}