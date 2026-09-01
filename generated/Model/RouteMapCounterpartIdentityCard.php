<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpartIdentityCard
{
    /**
     * Номер
     *
     * @var null|string
     */
    protected $number;

    /**
     * Серия
     *
     * @var null|string
     */
    protected $series;

    /**
     * Наименование вида документа, удостоверяющего личность
     *
     * @var null|string
     */
    protected $typeName;

    /**
     * Номер
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Номер
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Серия
     */
    public function getSeries(): ?string
    {
        return $this->series;
    }

    /**
     * Серия
     */
    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Наименование вида документа, удостоверяющего личность
     */
    public function getTypeName(): ?string
    {
        return $this->typeName;
    }

    /**
     * Наименование вида документа, удостоверяющего личность
     */
    public function setTypeName(?string $typeName): self
    {
        $this->typeName = $typeName;

        return $this;
    }
}
