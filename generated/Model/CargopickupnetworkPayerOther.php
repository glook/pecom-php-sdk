<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupnetworkPayerOther
{
    /**
     * Документ, удостоверяющий личность третьего лица. Обязательно для физлица при type = 3
     *
     * @var CargopickupnetworkPayerOtherIdentityCard|null
     */
    protected $identityCard;
    /**
     * ИНН третьего лица. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Наименование филиала оплаты за услугу
     *
     * @var string|null
     */
    protected $paymentCity;
    /**
     * Телефон
     *
     * @var string
     */
    protected $phone;
    /**
     * Наименование третьего лица
     *
     * @var string
     */
    protected $title;
    /**
     * Документ, удостоверяющий личность третьего лица. Обязательно для физлица при type = 3
     *
     * @return CargopickupnetworkPayerOtherIdentityCard|null
     */
    public function getIdentityCard() : ?CargopickupnetworkPayerOtherIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * Документ, удостоверяющий личность третьего лица. Обязательно для физлица при type = 3
     *
     * @param CargopickupnetworkPayerOtherIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?CargopickupnetworkPayerOtherIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * ИНН третьего лица. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН третьего лица. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
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
     * Наименование филиала оплаты за услугу
     *
     * @return string|null
     */
    public function getPaymentCity() : ?string
    {
        return $this->paymentCity;
    }
    /**
     * Наименование филиала оплаты за услугу
     *
     * @param string|null $paymentCity
     *
     * @return self
     */
    public function setPaymentCity(?string $paymentCity) : self
    {
        $this->paymentCity = $paymentCity;
        return $this;
    }
    /**
     * Телефон
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Телефон
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
     * Наименование третьего лица
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование третьего лица
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