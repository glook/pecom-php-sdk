<?php

namespace glook\PecomSdk\Generated\Model;

class GeoDataAddressComponent
{
    /**
     * Тип компоненты адреса
     *
     * @var string
     */
    protected $kind;
    /**
     * Название компоненты адреса
     *
     * @var string
     */
    protected $name;
    /**
     * Тип компоненты адреса
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * Тип компоненты адреса
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Название компоненты адреса
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Название компоненты адреса
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}