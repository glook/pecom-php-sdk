<?php

namespace glook\PecomSdk\Generated\Model;

class GeoAddressComponent
{
    /**
     * Тип компонента
     *
     * @var string|null
     */
    protected $kind;
    /**
     * Название компонента
     *
     * @var string|null
     */
    protected $name;
    /**
     * Тип компонента
     *
     * @return string|null
     */
    public function getKind() : ?string
    {
        return $this->kind;
    }
    /**
     * Тип компонента
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Название компонента
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Название компонента
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
}