<?php

namespace glook\PecomSdk\Generated\Model;

class Individual
{
    /**
     * Имя или первая буква имени (инициал)
     *
     * @var null|string
     */
    protected $firstName;

    /**
     * Фамилия
     *
     * @var null|string
     */
    protected $lastName;

    /**
     * Отчество или первая буква отчества (инициал), если имеется
     *
     * @var null|string
     */
    protected $patronymic;

    /**
     * Имя или первая буква имени (инициал)
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Имя или первая буква имени (инициал)
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Фамилия
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Фамилия
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Отчество или первая буква отчества (инициал), если имеется
     */
    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }

    /**
     * Отчество или первая буква отчества (инициал), если имеется
     */
    public function setPatronymic(?string $patronymic): self
    {
        $this->patronymic = $patronymic;

        return $this;
    }
}
