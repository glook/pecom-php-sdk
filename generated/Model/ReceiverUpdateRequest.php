<?php

namespace glook\PecomSdk\Generated\Model;

class ReceiverUpdateRequest
{
    /**
     * @var null|string
     */
    protected $address;

    /**
     * @var null|string
     */
    protected $city;

    /**
     * @var null|bool
     */
    protected $clearAddress;

    /**
     * @var null|bool
     */
    protected $clearInn;

    /**
     * @var null|bool
     */
    protected $clearPerson;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var null|string
     */
    protected $inn;

    /**
     * @var null|string
     */
    protected $person;

    /**
     * @var null|string
     */
    protected $phone;

    /**
     * @var null|string
     */
    protected $title;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getClearAddress(): ?bool
    {
        return $this->clearAddress;
    }

    public function setClearAddress(?bool $clearAddress): self
    {
        $this->clearAddress = $clearAddress;

        return $this;
    }

    public function getClearInn(): ?bool
    {
        return $this->clearInn;
    }

    public function setClearInn(?bool $clearInn): self
    {
        $this->clearInn = $clearInn;

        return $this;
    }

    public function getClearPerson(): ?bool
    {
        return $this->clearPerson;
    }

    public function setClearPerson(?bool $clearPerson): self
    {
        $this->clearPerson = $clearPerson;

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    public function getPerson(): ?string
    {
        return $this->person;
    }

    public function setPerson(?string $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
