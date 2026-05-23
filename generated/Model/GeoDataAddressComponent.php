<?php

namespace glook\PecomSdk\Generated\Model;

class GeoDataAddressComponent
{
    /**
     * Тип компоненты адреса.
     *
     * @var string
     */
    protected $kind;

    /**
     * Название компоненты адреса.
     *
     * @var string
     */
    protected $name;

    /**
     * Тип компоненты адреса.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Тип компоненты адреса.
     */
    public function setKind(string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Название компоненты адреса.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Название компоненты адреса.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
