<?php

namespace glook\PecomSdk\Generated\Model;

class CoordinatesNumber
{
    /**
     * Широта
     *
     * @var null|float
     */
    protected $latitude;

    /**
     * Долгота
     *
     * @var null|float
     */
    protected $longitude;

    /**
     * Широта
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Широта
     */
    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Долгота
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Долгота
     */
    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
