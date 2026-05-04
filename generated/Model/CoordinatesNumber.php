<?php

namespace glook\PecomSdk\Generated\Model;

class CoordinatesNumber
{
    /**
     * Широта
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * Долгота
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * Широта
     *
     * @return float|null
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * Широта
     *
     * @param float|null $latitude
     *
     * @return self
     */
    public function setLatitude(?float $latitude) : self
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Долгота
     *
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    /**
     * Долгота
     *
     * @param float|null $longitude
     *
     * @return self
     */
    public function setLongitude(?float $longitude) : self
    {
        $this->longitude = $longitude;
        return $this;
    }
}