<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesFindzonebyaddressPostBody
{
    /**
     * Адрес
     *
     * @var string
     */
    protected $address;
    /**
     * Адрес
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * Адрес
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
}