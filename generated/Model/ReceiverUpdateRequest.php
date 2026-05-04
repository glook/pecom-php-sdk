<?php

namespace glook\PecomSdk\Generated\Model;

class ReceiverUpdateRequest
{
    /**
     * 
     *
     * @var string|null
     */
    protected $address;
    /**
     * 
     *
     * @var string|null
     */
    protected $city;
    /**
     * 
     *
     * @var bool|null
     */
    protected $clearAddress;
    /**
     * 
     *
     * @var bool|null
     */
    protected $clearInn;
    /**
     * 
     *
     * @var bool|null
     */
    protected $clearPerson;
    /**
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var string|null
     */
    protected $inn;
    /**
     * 
     *
     * @var string|null
     */
    protected $person;
    /**
     * 
     *
     * @var string|null
     */
    protected $phone;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getClearAddress() : ?bool
    {
        return $this->clearAddress;
    }
    /**
     * 
     *
     * @param bool|null $clearAddress
     *
     * @return self
     */
    public function setClearAddress(?bool $clearAddress) : self
    {
        $this->clearAddress = $clearAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getClearInn() : ?bool
    {
        return $this->clearInn;
    }
    /**
     * 
     *
     * @param bool|null $clearInn
     *
     * @return self
     */
    public function setClearInn(?bool $clearInn) : self
    {
        $this->clearInn = $clearInn;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getClearPerson() : ?bool
    {
        return $this->clearPerson;
    }
    /**
     * 
     *
     * @param bool|null $clearPerson
     *
     * @return self
     */
    public function setClearPerson(?bool $clearPerson) : self
    {
        $this->clearPerson = $clearPerson;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
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
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * 
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn) : self
    {
        $this->inn = $inn;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPerson() : ?string
    {
        return $this->person;
    }
    /**
     * 
     *
     * @param string|null $person
     *
     * @return self
     */
    public function setPerson(?string $person) : self
    {
        $this->person = $person;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}