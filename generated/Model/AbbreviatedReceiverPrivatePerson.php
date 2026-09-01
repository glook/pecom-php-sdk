<?php

namespace glook\PecomSdk\Generated\Model;

class AbbreviatedReceiverPrivatePerson
{
    /**
     * первые буквы Фамилии Имени и Отчества как они заданы у нас в системе
     *
     * @var null|string
     */
    protected $name;

    /**
     * последние 2 цифры номера телефона получателя
     *
     * @var null|string
     */
    protected $phone;

    /**
     * первые буквы Фамилии Имени и Отчества как они заданы у нас в системе
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * первые буквы Фамилии Имени и Отчества как они заданы у нас в системе
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * последние 2 цифры номера телефона получателя
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * последние 2 цифры номера телефона получателя
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
