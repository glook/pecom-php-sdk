<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemReceiver
{
    /**
     * Наименование филиала получателя
     *
     * @var string
     */
    protected $city;
    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц
     *
     * @var CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard|null
     */
    protected $identityCard;
    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Контактное лицо
     *
     * @var string|null
     */
    protected $person;
    /**
     * Телефон
     *
     * @var string
     */
    protected $phone;
    /**
     * Наименование получателя
     *
     * @var string
     */
    protected $title;
    /**
     * Наименование филиала получателя
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Наименование филиала получателя
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц
     *
     * @return CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard|null
     */
    public function getIdentityCard() : ?CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц
     *
     * @param CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
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
     * Контактное лицо
     *
     * @return string|null
     */
    public function getPerson() : ?string
    {
        return $this->person;
    }
    /**
     * Контактное лицо
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
     * Наименование получателя
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование получателя
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