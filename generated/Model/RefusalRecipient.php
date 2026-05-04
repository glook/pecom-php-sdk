<?php

namespace glook\PecomSdk\Generated\Model;

class RefusalRecipient
{
    /**
     * 
     *
     * @var string
     */
    protected $inn;
    /**
     * 
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * 
     *
     * @var string
     */
    protected $person;
    /**
     * 
     *
     * @var string
     */
    protected $phone;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @return string
     */
    public function getInn() : string
    {
        return $this->inn;
    }
    /**
     * 
     *
     * @param string $inn
     *
     * @return self
     */
    public function setInn(string $inn) : self
    {
        $this->inn = $inn;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * 
     *
     * @param string|null $kpp
     *
     * @return self
     */
    public function setKpp(?string $kpp) : self
    {
        $this->kpp = $kpp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPerson() : string
    {
        return $this->person;
    }
    /**
     * 
     *
     * @param string $person
     *
     * @return self
     */
    public function setPerson(string $person) : self
    {
        $this->person = $person;
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
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}