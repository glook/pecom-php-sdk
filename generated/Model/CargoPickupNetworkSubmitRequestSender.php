<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestSender
{
    /**
     * Адрес офиса, по которому находятся документы на получения грузов
     *
     * @var string|null
     */
    protected $addressOffice;
    /**
     * Адрес, по которому необходимо забрать груз
     *
     * @var string|null
     */
    protected $addressStock;
    /**
     * Наименование филиала отправителя
     *
     * @var string
     */
    protected $city;
    /**
     * E-mail
     *
     * @var string|null
     */
    protected $email;
    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц
     *
     * @var CargoPickupNetworkSubmitRequestSenderIdentityCard|null
     */
    protected $identityCard;
    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Время начала обеденного перерыва
     *
     * @var string|null
     */
    protected $lunchBreakFrom;
    /**
     * Время окончания обеденного перерыва
     *
     * @var string|null
     */
    protected $lunchBreakTo;
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
     * Наименование отправителя
     *
     * @var string
     */
    protected $title;
    /**
     * Время начала рабочего дня
     *
     * @var string|null
     */
    protected $workTimeFrom;
    /**
     * Время окончания рабочего дня
     *
     * @var string|null
     */
    protected $workTimeTo;
    /**
     * Адрес офиса, по которому находятся документы на получения грузов
     *
     * @return string|null
     */
    public function getAddressOffice() : ?string
    {
        return $this->addressOffice;
    }
    /**
     * Адрес офиса, по которому находятся документы на получения грузов
     *
     * @param string|null $addressOffice
     *
     * @return self
     */
    public function setAddressOffice(?string $addressOffice) : self
    {
        $this->addressOffice = $addressOffice;
        return $this;
    }
    /**
     * Адрес, по которому необходимо забрать груз
     *
     * @return string|null
     */
    public function getAddressStock() : ?string
    {
        return $this->addressStock;
    }
    /**
     * Адрес, по которому необходимо забрать груз
     *
     * @param string|null $addressStock
     *
     * @return self
     */
    public function setAddressStock(?string $addressStock) : self
    {
        $this->addressStock = $addressStock;
        return $this;
    }
    /**
     * Наименование филиала отправителя
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Наименование филиала отправителя
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
     * E-mail
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * E-mail
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
     * Документ, удостоверяющий личность. Обязательно для физических лиц
     *
     * @return CargoPickupNetworkSubmitRequestSenderIdentityCard|null
     */
    public function getIdentityCard() : ?CargoPickupNetworkSubmitRequestSenderIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц
     *
     * @param CargoPickupNetworkSubmitRequestSenderIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?CargoPickupNetworkSubmitRequestSenderIdentityCard $identityCard) : self
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
     * Время начала обеденного перерыва
     *
     * @return string|null
     */
    public function getLunchBreakFrom() : ?string
    {
        return $this->lunchBreakFrom;
    }
    /**
     * Время начала обеденного перерыва
     *
     * @param string|null $lunchBreakFrom
     *
     * @return self
     */
    public function setLunchBreakFrom(?string $lunchBreakFrom) : self
    {
        $this->lunchBreakFrom = $lunchBreakFrom;
        return $this;
    }
    /**
     * Время окончания обеденного перерыва
     *
     * @return string|null
     */
    public function getLunchBreakTo() : ?string
    {
        return $this->lunchBreakTo;
    }
    /**
     * Время окончания обеденного перерыва
     *
     * @param string|null $lunchBreakTo
     *
     * @return self
     */
    public function setLunchBreakTo(?string $lunchBreakTo) : self
    {
        $this->lunchBreakTo = $lunchBreakTo;
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
     * Наименование отправителя
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование отправителя
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
    /**
     * Время начала рабочего дня
     *
     * @return string|null
     */
    public function getWorkTimeFrom() : ?string
    {
        return $this->workTimeFrom;
    }
    /**
     * Время начала рабочего дня
     *
     * @param string|null $workTimeFrom
     *
     * @return self
     */
    public function setWorkTimeFrom(?string $workTimeFrom) : self
    {
        $this->workTimeFrom = $workTimeFrom;
        return $this;
    }
    /**
     * Время окончания рабочего дня
     *
     * @return string|null
     */
    public function getWorkTimeTo() : ?string
    {
        return $this->workTimeTo;
    }
    /**
     * Время окончания рабочего дня
     *
     * @param string|null $workTimeTo
     *
     * @return self
     */
    public function setWorkTimeTo(?string $workTimeTo) : self
    {
        $this->workTimeTo = $workTimeTo;
        return $this;
    }
}