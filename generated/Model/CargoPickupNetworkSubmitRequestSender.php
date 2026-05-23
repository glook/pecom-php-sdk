<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestSender
{
    /**
     * Адрес офиса, по которому находятся документы на получения грузов.
     *
     * @var null|string
     */
    protected $addressOffice;

    /**
     * Адрес, по которому необходимо забрать груз.
     *
     * @var null|string
     */
    protected $addressStock;

    /**
     * Наименование филиала отправителя.
     *
     * @var string
     */
    protected $city;

    /**
     * E-mail.
     *
     * @var null|string
     */
    protected $email;

    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц.
     *
     * @var null|CargopickupnetworkIdentityCard
     */
    protected $identityCard;

    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать).
     *
     * @var null|string
     */
    protected $inn;

    /**
     * Время начала обеденного перерыва.
     *
     * @var null|string
     */
    protected $lunchBreakFrom;

    /**
     * Время окончания обеденного перерыва.
     *
     * @var null|string
     */
    protected $lunchBreakTo;

    /**
     * Контактное лицо.
     *
     * @var null|string
     */
    protected $person;

    /**
     * Телефон.
     *
     * @var string
     */
    protected $phone;

    /**
     * Наименование отправителя.
     *
     * @var string
     */
    protected $title;

    /**
     * Время начала рабочего дня.
     *
     * @var null|string
     */
    protected $workTimeFrom;

    /**
     * Время окончания рабочего дня.
     *
     * @var null|string
     */
    protected $workTimeTo;

    /**
     * Адрес офиса, по которому находятся документы на получения грузов.
     */
    public function getAddressOffice(): ?string
    {
        return $this->addressOffice;
    }

    /**
     * Адрес офиса, по которому находятся документы на получения грузов.
     */
    public function setAddressOffice(?string $addressOffice): self
    {
        $this->addressOffice = $addressOffice;

        return $this;
    }

    /**
     * Адрес, по которому необходимо забрать груз.
     */
    public function getAddressStock(): ?string
    {
        return $this->addressStock;
    }

    /**
     * Адрес, по которому необходимо забрать груз.
     */
    public function setAddressStock(?string $addressStock): self
    {
        $this->addressStock = $addressStock;

        return $this;
    }

    /**
     * Наименование филиала отправителя.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Наименование филиала отправителя.
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * E-mail.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * E-mail.
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц.
     */
    public function getIdentityCard(): ?CargopickupnetworkIdentityCard
    {
        return $this->identityCard;
    }

    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц.
     */
    public function setIdentityCard(?CargopickupnetworkIdentityCard $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать).
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать).
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Время начала обеденного перерыва.
     */
    public function getLunchBreakFrom(): ?string
    {
        return $this->lunchBreakFrom;
    }

    /**
     * Время начала обеденного перерыва.
     */
    public function setLunchBreakFrom(?string $lunchBreakFrom): self
    {
        $this->lunchBreakFrom = $lunchBreakFrom;

        return $this;
    }

    /**
     * Время окончания обеденного перерыва.
     */
    public function getLunchBreakTo(): ?string
    {
        return $this->lunchBreakTo;
    }

    /**
     * Время окончания обеденного перерыва.
     */
    public function setLunchBreakTo(?string $lunchBreakTo): self
    {
        $this->lunchBreakTo = $lunchBreakTo;

        return $this;
    }

    /**
     * Контактное лицо.
     */
    public function getPerson(): ?string
    {
        return $this->person;
    }

    /**
     * Контактное лицо.
     */
    public function setPerson(?string $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Телефон.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Телефон.
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Наименование отправителя.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование отправителя.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Время начала рабочего дня.
     */
    public function getWorkTimeFrom(): ?string
    {
        return $this->workTimeFrom;
    }

    /**
     * Время начала рабочего дня.
     */
    public function setWorkTimeFrom(?string $workTimeFrom): self
    {
        $this->workTimeFrom = $workTimeFrom;

        return $this;
    }

    /**
     * Время окончания рабочего дня.
     */
    public function getWorkTimeTo(): ?string
    {
        return $this->workTimeTo;
    }

    /**
     * Время окончания рабочего дня.
     */
    public function setWorkTimeTo(?string $workTimeTo): self
    {
        $this->workTimeTo = $workTimeTo;

        return $this;
    }
}
