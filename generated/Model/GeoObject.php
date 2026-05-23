<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObject
{
    /**
     * Границы объекта.
     *
     * @var GeoObjectBoundedBy
     */
    protected $boundedBy;

    /**
     * Описание объекта.
     *
     * @var string
     */
    protected $description;

    /**
     * Метаданные объекта.
     *
     * @var GeoObjectMetaDataProperty
     */
    protected $metaDataProperty;

    /**
     * Название объекта.
     *
     * @var string
     */
    protected $name;

    /**
     * Центральная точка объекта.
     *
     * @var GeoObjectPoint
     */
    protected $point;

    /**
     * Границы объекта.
     */
    public function getBoundedBy(): GeoObjectBoundedBy
    {
        return $this->boundedBy;
    }

    /**
     * Границы объекта.
     */
    public function setBoundedBy(GeoObjectBoundedBy $boundedBy): self
    {
        $this->boundedBy = $boundedBy;

        return $this;
    }

    /**
     * Описание объекта.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Описание объекта.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Метаданные объекта.
     */
    public function getMetaDataProperty(): GeoObjectMetaDataProperty
    {
        return $this->metaDataProperty;
    }

    /**
     * Метаданные объекта.
     */
    public function setMetaDataProperty(GeoObjectMetaDataProperty $metaDataProperty): self
    {
        $this->metaDataProperty = $metaDataProperty;

        return $this;
    }

    /**
     * Название объекта.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Название объекта.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Центральная точка объекта.
     */
    public function getPoint(): GeoObjectPoint
    {
        return $this->point;
    }

    /**
     * Центральная точка объекта.
     */
    public function setPoint(GeoObjectPoint $point): self
    {
        $this->point = $point;

        return $this;
    }
}
