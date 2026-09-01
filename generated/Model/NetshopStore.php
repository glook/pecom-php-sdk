<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopStore
{
    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $branch;

    /**
     * Код адреса
     *
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $phone;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getBranch(): string
    {
        return $this->branch;
    }

    public function setBranch(string $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Код адреса
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Код адреса
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

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
}
