<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupStatusItem
{
    /**
     * 
     *
     * @var string|null
     */
    protected $carBrand;
    /**
     * 
     *
     * @var string|null
     */
    protected $carDriver;
    /**
     * 
     *
     * @var string|null
     */
    protected $carDriverPhone;
    /**
     * 
     *
     * @var string
     */
    protected $cargoCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $carNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $error;
    /**
     * 
     *
     * @var string|null
     */
    protected $fenceStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $intakeStatus;
    /**
     * 
     *
     * @var int|null
     */
    protected $intakeStatusCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $intervalFrom;
    /**
     * 
     *
     * @var string|null
     */
    protected $intervalLunchBreakFrom;
    /**
     * 
     *
     * @var string|null
     */
    protected $intervalLunchBreakTo;
    /**
     * 
     *
     * @var string|null
     */
    protected $intervalTo;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $pickupDate;
    /**
     * 
     *
     * @return string|null
     */
    public function getCarBrand() : ?string
    {
        return $this->carBrand;
    }
    /**
     * 
     *
     * @param string|null $carBrand
     *
     * @return self
     */
    public function setCarBrand(?string $carBrand) : self
    {
        $this->carBrand = $carBrand;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCarDriver() : ?string
    {
        return $this->carDriver;
    }
    /**
     * 
     *
     * @param string|null $carDriver
     *
     * @return self
     */
    public function setCarDriver(?string $carDriver) : self
    {
        $this->carDriver = $carDriver;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCarDriverPhone() : ?string
    {
        return $this->carDriverPhone;
    }
    /**
     * 
     *
     * @param string|null $carDriverPhone
     *
     * @return self
     */
    public function setCarDriverPhone(?string $carDriverPhone) : self
    {
        $this->carDriverPhone = $carDriverPhone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCargoCode() : string
    {
        return $this->cargoCode;
    }
    /**
     * 
     *
     * @param string $cargoCode
     *
     * @return self
     */
    public function setCargoCode(string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCarNumber() : ?string
    {
        return $this->carNumber;
    }
    /**
     * 
     *
     * @param string|null $carNumber
     *
     * @return self
     */
    public function setCarNumber(?string $carNumber) : self
    {
        $this->carNumber = $carNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFenceStatus() : ?string
    {
        return $this->fenceStatus;
    }
    /**
     * 
     *
     * @param string|null $fenceStatus
     *
     * @return self
     */
    public function setFenceStatus(?string $fenceStatus) : self
    {
        $this->fenceStatus = $fenceStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIntakeStatus() : ?string
    {
        return $this->intakeStatus;
    }
    /**
     * 
     *
     * @param string|null $intakeStatus
     *
     * @return self
     */
    public function setIntakeStatus(?string $intakeStatus) : self
    {
        $this->intakeStatus = $intakeStatus;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getIntakeStatusCode() : ?int
    {
        return $this->intakeStatusCode;
    }
    /**
     * 
     *
     * @param int|null $intakeStatusCode
     *
     * @return self
     */
    public function setIntakeStatusCode(?int $intakeStatusCode) : self
    {
        $this->intakeStatusCode = $intakeStatusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIntervalFrom() : ?string
    {
        return $this->intervalFrom;
    }
    /**
     * 
     *
     * @param string|null $intervalFrom
     *
     * @return self
     */
    public function setIntervalFrom(?string $intervalFrom) : self
    {
        $this->intervalFrom = $intervalFrom;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIntervalLunchBreakFrom() : ?string
    {
        return $this->intervalLunchBreakFrom;
    }
    /**
     * 
     *
     * @param string|null $intervalLunchBreakFrom
     *
     * @return self
     */
    public function setIntervalLunchBreakFrom(?string $intervalLunchBreakFrom) : self
    {
        $this->intervalLunchBreakFrom = $intervalLunchBreakFrom;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIntervalLunchBreakTo() : ?string
    {
        return $this->intervalLunchBreakTo;
    }
    /**
     * 
     *
     * @param string|null $intervalLunchBreakTo
     *
     * @return self
     */
    public function setIntervalLunchBreakTo(?string $intervalLunchBreakTo) : self
    {
        $this->intervalLunchBreakTo = $intervalLunchBreakTo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIntervalTo() : ?string
    {
        return $this->intervalTo;
    }
    /**
     * 
     *
     * @param string|null $intervalTo
     *
     * @return self
     */
    public function setIntervalTo(?string $intervalTo) : self
    {
        $this->intervalTo = $intervalTo;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getPickupDate() : ?\DateTime
    {
        return $this->pickupDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $pickupDate
     *
     * @return self
     */
    public function setPickupDate(?\DateTime $pickupDate) : self
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }
}