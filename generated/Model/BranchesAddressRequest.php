<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesAddressRequest
{
    /**
     * Адрес или часть адреса.
     *
     * @var string
     */
    protected $address;

    /**
     * Адрес или часть адреса.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Адрес или часть адреса.
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
