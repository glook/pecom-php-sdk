<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPickup
{
    /**
     * @var string
     */
    protected $address;

    /**
     * @var \DateTime
     */
    protected $applicationDate;

    /**
     * @var null|string
     */
    protected $comment;

    /**
     * @var bool
     */
    protected $enabled;

    /**
     * Время начала обеденного перерыва
     *
     * @var null|string
     */
    protected $lunchBreakFrom;

    /**
     * Время окончания обеденного перерыва
     *
     * @var null|string
     */
    protected $lunchBreakTo;

    /**
     * @var null|NetshopPayer
     */
    protected $payer;

    /**
     * @var string
     */
    protected $person;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var float
     */
    protected $volume;

    /**
     * @var float
     */
    protected $weight;

    /**
     * Время начала рабочего дня
     *
     * @var null|string
     */
    protected $workTimeFrom;

    /**
     * Время окончания рабочего дня
     *
     * @var null|string
     */
    protected $workTimeTo;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getApplicationDate(): \DateTime
    {
        return $this->applicationDate;
    }

    public function setApplicationDate(\DateTime $applicationDate): self
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Время начала обеденного перерыва
     */
    public function getLunchBreakFrom(): ?string
    {
        return $this->lunchBreakFrom;
    }

    /**
     * Время начала обеденного перерыва
     */
    public function setLunchBreakFrom(?string $lunchBreakFrom): self
    {
        $this->lunchBreakFrom = $lunchBreakFrom;

        return $this;
    }

    /**
     * Время окончания обеденного перерыва
     */
    public function getLunchBreakTo(): ?string
    {
        return $this->lunchBreakTo;
    }

    /**
     * Время окончания обеденного перерыва
     */
    public function setLunchBreakTo(?string $lunchBreakTo): self
    {
        $this->lunchBreakTo = $lunchBreakTo;

        return $this;
    }

    public function getPayer(): ?NetshopPayer
    {
        return $this->payer;
    }

    public function setPayer(?NetshopPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getPerson(): string
    {
        return $this->person;
    }

    public function setPerson(string $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getVolume(): float
    {
        return $this->volume;
    }

    public function setVolume(float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Время начала рабочего дня
     */
    public function getWorkTimeFrom(): ?string
    {
        return $this->workTimeFrom;
    }

    /**
     * Время начала рабочего дня
     */
    public function setWorkTimeFrom(?string $workTimeFrom): self
    {
        $this->workTimeFrom = $workTimeFrom;

        return $this;
    }

    /**
     * Время окончания рабочего дня
     */
    public function getWorkTimeTo(): ?string
    {
        return $this->workTimeTo;
    }

    /**
     * Время окончания рабочего дня
     */
    public function setWorkTimeTo(?string $workTimeTo): self
    {
        $this->workTimeTo = $workTimeTo;

        return $this;
    }
}
