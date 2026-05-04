<?php

namespace glook\PecomSdk\Generated\Model;

class AbbreviatedReceiverPrivatePerson
{
    /**
     * первые буквы Фамилии Имени и Отчества как они заданы у нас в системе
     *
     * @var string|null
     */
    protected $name;
    /**
     * последние 2 цифры номера телефона получателя
     *
     * @var string|null
     */
    protected $phone;
    /**
     * первые буквы Фамилии Имени и Отчества как они заданы у нас в системе
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * первые буквы Фамилии Имени и Отчества как они заданы у нас в системе
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * последние 2 цифры номера телефона получателя
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * последние 2 цифры номера телефона получателя
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