<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopStore
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
     * 
     *
     * @var string
     */
    protected $phone;
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
     * @return string
     */
    public function getBranch() : string
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param string $branch
     *
     * @return self
     */
    public function setBranch(string $branch) : self
    {
        $this->branch = $branch;
        return $this;
    }
    /**
     * Код адреса
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Код адреса
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
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
}