<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemReceiver
{
    /**
     * Наименование филиала получателя.
     *
     * @var string
     */
    protected $city;

    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц.
     *
     * @var null|CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard
     */
    protected $identityCard;

    /**
     * ИНН. Обязательно для Юридических лиц и ИП (для физических лиц не передавать).
     *
     * @var null|string
     */
    protected $inn;

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
     * Наименование получателя.
     *
     * @var string
     */
    protected $title;

    /**
     * Наименование филиала получателя.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Наименование филиала получателя.
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц.
     */
    public function getIdentityCard(): ?CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard
    {
        return $this->identityCard;
    }

    /**
     * Документ, удостоверяющий личность. Обязательно для физических лиц.
     */
    public function setIdentityCard(?CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard $identityCard): self
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
     * Наименование получателя.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование получателя.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
