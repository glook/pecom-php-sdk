<?php

namespace glook\PecomSdk\Generated\Model;

class DocumentMask
{
    /**
     * Номер
     *
     * @var null|string
     */
    protected $number;

    /**
     * Серия.
     *
     * @var null|string
     */
    protected $series;

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
     * Серия.
     */
    public function getSeries(): ?string
    {
        return $this->series;
    }

    /**
     * Серия.
     */
    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }
}
