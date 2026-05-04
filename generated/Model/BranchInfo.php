<?php

namespace glook\PecomSdk\Generated\Model;

class BranchInfo
{
    /**
     * Адрес
     *
     * @var string|null
     */
    protected $address;
    /**
     * Филиал
     *
     * @var string|null
     */
    protected $city;
    /**
     * Email
     *
     * @var string|null
     */
    protected $email;
    /**
     * Телефоны
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Адрес
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Адрес
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
     * Филиал
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Филиал
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
     * Email
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Email
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Телефоны
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * Телефоны
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
}