<?php

namespace glook\PecomSdk\Generated\Model;

class DocumentMask
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
}