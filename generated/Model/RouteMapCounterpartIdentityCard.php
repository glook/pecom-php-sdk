<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpartIdentityCard
{
    /**
     * Номер
     *
     * @var string|null
     */
    protected $number;
    /**
     * Серия
     *
     * @var string|null
     */
    protected $series;
    /**
     * Наименование вида документа, удостоверяющего личность
     *
     * @var string|null
     */
    protected $typeName;
    /**
     * Номер
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * Номер
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * Серия
     *
     * @return string|null
     */
    public function getSeries() : ?string
    {
        return $this->series;
    }
    /**
     * Серия
     *
     * @param string|null $series
     *
     * @return self
     */
    public function setSeries(?string $series) : self
    {
        $this->series = $series;
        return $this;
    }
    /**
     * Наименование вида документа, удостоверяющего личность
     *
     * @return string|null
     */
    public function getTypeName() : ?string
    {
        return $this->typeName;
    }
    /**
     * Наименование вида документа, удостоверяющего личность
     *
     * @param string|null $typeName
     *
     * @return self
     */
    public function setTypeName(?string $typeName) : self
    {
        $this->typeName = $typeName;
        return $this;
    }
}