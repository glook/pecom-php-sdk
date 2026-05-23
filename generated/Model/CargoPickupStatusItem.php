<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupStatusItem
{
    /**
     * @var null|string
     */
    protected $carBrand;

    /**
     * @var null|string
     */
    protected $carDriver;

    /**
     * @var null|string
     */
    protected $carDriverPhone;

    /**
     * @var string
     */
    protected $cargoCode;

    /**
     * @var null|string
     */
    protected $carNumber;

    /**
     * @var null|string
     */
    protected $error;

    /**
     * @var null|string
     */
    protected $fenceStatus;

    /**
     * @var null|string
     */
    protected $intakeStatus;

    /**
     * @var null|int
     */
    protected $intakeStatusCode;

    /**
     * @var null|string
     */
    protected $intervalFrom;

    /**
     * @var null|string
     */
    protected $intervalLunchBreakFrom;

    /**
     * @var null|string
     */
    protected $intervalLunchBreakTo;

    /**
     * @var null|string
     */
    protected $intervalTo;

    /**
     * @var null|\DateTime
     */
    protected $pickupDate;

    public function getCarBrand(): ?string
    {
        return $this->carBrand;
    }

    public function setCarBrand(?string $carBrand): self
    {
        $this->carBrand = $carBrand;

        return $this;
    }

    public function getCarDriver(): ?string
    {
        return $this->carDriver;
    }

    public function setCarDriver(?string $carDriver): self
    {
        $this->carDriver = $carDriver;

        return $this;
    }

    public function getCarDriverPhone(): ?string
    {
        return $this->carDriverPhone;
    }

    public function setCarDriverPhone(?string $carDriverPhone): self
    {
        $this->carDriverPhone = $carDriverPhone;

        return $this;
    }

    public function getCargoCode(): string
    {
        return $this->cargoCode;
    }

    public function setCargoCode(string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    public function getCarNumber(): ?string
    {
        return $this->carNumber;
    }

    public function setCarNumber(?string $carNumber): self
    {
        $this->carNumber = $carNumber;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getFenceStatus(): ?string
    {
        return $this->fenceStatus;
    }

    public function setFenceStatus(?string $fenceStatus): self
    {
        $this->fenceStatus = $fenceStatus;

        return $this;
    }

    public function getIntakeStatus(): ?string
    {
        return $this->intakeStatus;
    }

    public function setIntakeStatus(?string $intakeStatus): self
    {
        $this->intakeStatus = $intakeStatus;

        return $this;
    }

    public function getIntakeStatusCode(): ?int
    {
        return $this->intakeStatusCode;
    }

    public function setIntakeStatusCode(?int $intakeStatusCode): self
    {
        $this->intakeStatusCode = $intakeStatusCode;

        return $this;
    }

    public function getIntervalFrom(): ?string
    {
        return $this->intervalFrom;
    }

    public function setIntervalFrom(?string $intervalFrom): self
    {
        $this->intervalFrom = $intervalFrom;

        return $this;
    }

    public function getIntervalLunchBreakFrom(): ?string
    {
        return $this->intervalLunchBreakFrom;
    }

    public function setIntervalLunchBreakFrom(?string $intervalLunchBreakFrom): self
    {
        $this->intervalLunchBreakFrom = $intervalLunchBreakFrom;

        return $this;
    }

    public function getIntervalLunchBreakTo(): ?string
    {
        return $this->intervalLunchBreakTo;
    }

    public function setIntervalLunchBreakTo(?string $intervalLunchBreakTo): self
    {
        $this->intervalLunchBreakTo = $intervalLunchBreakTo;

        return $this;
    }

    public function getIntervalTo(): ?string
    {
        return $this->intervalTo;
    }

    public function setIntervalTo(?string $intervalTo): self
    {
        $this->intervalTo = $intervalTo;

        return $this;
    }

    public function getPickupDate(): ?\DateTime
    {
        return $this->pickupDate;
    }

    public function setPickupDate(?\DateTime $pickupDate): self
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }
}
