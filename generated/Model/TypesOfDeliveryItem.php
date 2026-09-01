<?php

namespace glook\PecomSdk\Generated\Model;

class TypesOfDeliveryItem
{
    /**
     * Для заказа перевозки по продукту/тарифу требуется договор.
     * `false` — предусмотрена работа по договору оферты, размещенному на сайте www.pecom.ru
     *
     * @var bool
     */
    protected $contractIsRequired;

    /**
     * Полное наименование продукта/тарифа
     *
     * @var string
     */
    protected $fullName;

    /**
     * Наименование продукта/тарифа
     *
     * @var string
     */
    protected $name;

    /**
     * Идентификатор продукта/тарифа
     *
     * @var int
     */
    protected $type;

    /**
     * Для заказа перевозки по продукту/тарифу требуется договор.
     * `false` — предусмотрена работа по договору оферты, размещенному на сайте www.pecom.ru
     */
    public function getContractIsRequired(): bool
    {
        return $this->contractIsRequired;
    }

    /**
     * Для заказа перевозки по продукту/тарифу требуется договор.
     * `false` — предусмотрена работа по договору оферты, размещенному на сайте www.pecom.ru
     */
    public function setContractIsRequired(bool $contractIsRequired): self
    {
        $this->contractIsRequired = $contractIsRequired;

        return $this;
    }

    /**
     * Полное наименование продукта/тарифа
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * Полное наименование продукта/тарифа
     */
    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Наименование продукта/тарифа
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Наименование продукта/тарифа
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Идентификатор продукта/тарифа
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Идентификатор продукта/тарифа
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
