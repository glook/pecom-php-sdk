<?php

namespace glook\PecomSdk\Generated\Model;

class Individual
{
    /**
     * Имя или первая буква имени (инициал)
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Фамилия
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Отчество или первая буква отчества (инициал), если имеется
     *
     * @var string|null
     */
    protected $patronymic;
    /**
     * Имя или первая буква имени (инициал)
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * Имя или первая буква имени (инициал)
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Фамилия
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * Фамилия
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Отчество или первая буква отчества (инициал), если имеется
     *
     * @return string|null
     */
    public function getPatronymic() : ?string
    {
        return $this->patronymic;
    }
    /**
     * Отчество или первая буква отчества (инициал), если имеется
     *
     * @param string|null $patronymic
     *
     * @return self
     */
    public function setPatronymic(?string $patronymic) : self
    {
        $this->patronymic = $patronymic;
        return $this;
    }
}