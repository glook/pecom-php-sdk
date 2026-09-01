<?php

namespace glook\PecomSdk\Generated\Model;

class BranchInfo
{
    /**
     * Адрес
     *
     * @var null|string
     */
    protected $address;

    /**
     * Филиал
     *
     * @var null|string
     */
    protected $city;

    /**
     * Email
     *
     * @var null|string
     */
    protected $email;

    /**
     * Телефоны
     *
     * @var null|string
     */
    protected $phone;

    /**
     * Адрес
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Адрес
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Филиал
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Филиал
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Email
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Телефоны
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Телефоны
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
