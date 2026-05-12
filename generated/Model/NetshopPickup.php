<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPickup
{
    /**
     * 
     *
     * @var string
     */
    protected $address;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $applicationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Время начала обеденного перерыва
     *
     * @var string|null
     */
    protected $lunchBreakFrom;
    /**
     * Время окончания обеденного перерыва
     *
     * @var string|null
     */
    protected $lunchBreakTo;
    /**
     * 
     *
     * @var NetshopPayer|null
     */
    protected $payer;
    /**
     * 
     *
     * @var string
     */
    protected $person;
    /**
     * 
     *
     * @var string
     */
    protected $phone;
    /**
     * 
     *
     * @var float
     */
    protected $volume;
    /**
     * 
     *
     * @var float
     */
    protected $weight;
    /**
     * Время начала рабочего дня
     *
     * @var string|null
     */
    protected $workTimeFrom;
    /**
     * Время окончания рабочего дня
     *
     * @var string|null
     */
    protected $workTimeTo;
    /**
     * 
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * 
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
     * 
     *
     * @return \DateTime
     */
    public function getApplicationDate() : \DateTime
    {
        return $this->applicationDate;
    }
    /**
     * 
     *
     * @param \DateTime $applicationDate
     *
     * @return self
     */
    public function setApplicationDate(\DateTime $applicationDate) : self
    {
        $this->applicationDate = $applicationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Время начала обеденного перерыва
     *
     * @return string|null
     */
    public function getLunchBreakFrom() : ?string
    {
        return $this->lunchBreakFrom;
    }
    /**
     * Время начала обеденного перерыва
     *
     * @param string|null $lunchBreakFrom
     *
     * @return self
     */
    public function setLunchBreakFrom(?string $lunchBreakFrom) : self
    {
        $this->lunchBreakFrom = $lunchBreakFrom;
        return $this;
    }
    /**
     * Время окончания обеденного перерыва
     *
     * @return string|null
     */
    public function getLunchBreakTo() : ?string
    {
        return $this->lunchBreakTo;
    }
    /**
     * Время окончания обеденного перерыва
     *
     * @param string|null $lunchBreakTo
     *
     * @return self
     */
    public function setLunchBreakTo(?string $lunchBreakTo) : self
    {
        $this->lunchBreakTo = $lunchBreakTo;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopPayer|null
     */
    public function getPayer() : ?NetshopPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param NetshopPayer|null $payer
     *
     * @return self
     */
    public function setPayer(?NetshopPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPerson() : string
    {
        return $this->person;
    }
    /**
     * 
     *
     * @param string $person
     *
     * @return self
     */
    public function setPerson(string $person) : self
    {
        $this->person = $person;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getVolume() : float
    {
        return $this->volume;
    }
    /**
     * 
     *
     * @param float $volume
     *
     * @return self
     */
    public function setVolume(float $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Время начала рабочего дня
     *
     * @return string|null
     */
    public function getWorkTimeFrom() : ?string
    {
        return $this->workTimeFrom;
    }
    /**
     * Время начала рабочего дня
     *
     * @param string|null $workTimeFrom
     *
     * @return self
     */
    public function setWorkTimeFrom(?string $workTimeFrom) : self
    {
        $this->workTimeFrom = $workTimeFrom;
        return $this;
    }
    /**
     * Время окончания рабочего дня
     *
     * @return string|null
     */
    public function getWorkTimeTo() : ?string
    {
        return $this->workTimeTo;
    }
    /**
     * Время окончания рабочего дня
     *
     * @param string|null $workTimeTo
     *
     * @return self
     */
    public function setWorkTimeTo(?string $workTimeTo) : self
    {
        $this->workTimeTo = $workTimeTo;
        return $this;
    }
}