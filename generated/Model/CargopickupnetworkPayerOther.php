<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupnetworkPayerOther
{
    /**
     * Документ, удостоверяющий личность третьего лица. Обязательно для физлица при type = 3
     *
     * @var null|CargopickupnetworkIdentityCard
     */
    protected $identityCard;

    /**
     * ИНН третьего лица. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @var null|string
     */
    protected $inn;

    /**
     * Наименование филиала оплаты за услугу
     *
     * @var null|string
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
     */
    public function getIdentityCard(): ?CargopickupnetworkIdentityCard
    {
        return $this->identityCard;
    }

    /**
     * Документ, удостоверяющий личность третьего лица. Обязательно для физлица при type = 3
     */
    public function setIdentityCard(?CargopickupnetworkIdentityCard $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    /**
     * ИНН третьего лица. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН третьего лица. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Наименование филиала оплаты за услугу
     */
    public function getPaymentCity(): ?string
    {
        return $this->paymentCity;
    }

    /**
     * Наименование филиала оплаты за услугу
     */
    public function setPaymentCity(?string $paymentCity): self
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    /**
     * Телефон
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Телефон
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Наименование третьего лица
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование третьего лица
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
