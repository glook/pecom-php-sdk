<?php

namespace glook\PecomSdk\Generated\Model;

class GeoAddressComponent
{
    /**
     * Тип компонента.
     *
     * @var null|string
     */
    protected $kind;

    /**
     * Название компонента.
     *
     * @var null|string
     */
    protected $name;

    /**
     * Тип компонента.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Тип компонента.
     */
    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Название компонента.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Название компонента.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
