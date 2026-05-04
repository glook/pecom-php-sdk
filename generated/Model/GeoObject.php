<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObject
{
    /**
     * Границы объекта
     *
     * @var GeoObjectBoundedBy
     */
    protected $boundedBy;
    /**
     * Описание объекта
     *
     * @var string
     */
    protected $description;
    /**
     * Метаданные объекта
     *
     * @var GeoObjectMetaDataProperty
     */
    protected $metaDataProperty;
    /**
     * Название объекта
     *
     * @var string
     */
    protected $name;
    /**
     * Центральная точка объекта
     *
     * @var GeoObjectPoint
     */
    protected $point;
    /**
     * Границы объекта
     *
     * @return GeoObjectBoundedBy
     */
    public function getBoundedBy() : GeoObjectBoundedBy
    {
        return $this->boundedBy;
    }
    /**
     * Границы объекта
     *
     * @param GeoObjectBoundedBy $boundedBy
     *
     * @return self
     */
    public function setBoundedBy(GeoObjectBoundedBy $boundedBy) : self
    {
        $this->boundedBy = $boundedBy;
        return $this;
    }
    /**
     * Описание объекта
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Описание объекта
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Метаданные объекта
     *
     * @return GeoObjectMetaDataProperty
     */
    public function getMetaDataProperty() : GeoObjectMetaDataProperty
    {
        return $this->metaDataProperty;
    }
    /**
     * Метаданные объекта
     *
     * @param GeoObjectMetaDataProperty $metaDataProperty
     *
     * @return self
     */
    public function setMetaDataProperty(GeoObjectMetaDataProperty $metaDataProperty) : self
    {
        $this->metaDataProperty = $metaDataProperty;
        return $this;
    }
    /**
     * Название объекта
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Название объекта
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
    /**
     * Центральная точка объекта
     *
     * @return GeoObjectPoint
     */
    public function getPoint() : GeoObjectPoint
    {
        return $this->point;
    }
    /**
     * Центральная точка объекта
     *
     * @param GeoObjectPoint $point
     *
     * @return self
     */
    public function setPoint(GeoObjectPoint $point) : self
    {
        $this->point = $point;
        return $this;
    }
}