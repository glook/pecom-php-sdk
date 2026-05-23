<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationRefusalWarehouseRecipient
{
    /**
     * ИНН получателя возвратного груза. Обязательный, если передается блок.
     *
     * @var string
     */
    protected $inn;

    /**
     * КПП получателя возвратного груза. Необязательный.
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * Имя контактного лица получателя возвратного груза. Обязательный, если передается блок.
     *
     * @var string
     */
    protected $person;

    /**
     * Телефон контактного лица получателя возвратного груза. Обязательный, если передается блок.
     *
     * @var string
     */
    protected $phone;

    /**
     * Наименование получателя возвратного груза. Обязательный, если передается блок.
     *
     * @var string
     */
    protected $title;

    /**
     * ИНН получателя возвратного груза. Обязательный, если передается блок.
     */
    public function getInn(): string
    {
        return $this->inn;
    }

    /**
     * ИНН получателя возвратного груза. Обязательный, если передается блок.
     */
    public function setInn(string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * КПП получателя возвратного груза. Необязательный.
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * КПП получателя возвратного груза. Необязательный.
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    /**
     * Имя контактного лица получателя возвратного груза. Обязательный, если передается блок.
     */
    public function getPerson(): string
    {
        return $this->person;
    }

    /**
     * Имя контактного лица получателя возвратного груза. Обязательный, если передается блок.
     */
    public function setPerson(string $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Телефон контактного лица получателя возвратного груза. Обязательный, если передается блок.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Телефон контактного лица получателя возвратного груза. Обязательный, если передается блок.
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Наименование получателя возвратного груза. Обязательный, если передается блок.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование получателя возвратного груза. Обязательный, если передается блок.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
