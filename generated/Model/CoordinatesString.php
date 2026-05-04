<?php

namespace glook\PecomSdk\Generated\Model;

class CoordinatesString
{
    /**
     * Широта
     *
     * @var string|null
     */
    protected $latitude;
    /**
     * Долгота
     *
     * @var string|null
     */
    protected $longitude;
    /**
     * Широта
     *
     * @return string|null
     */
    public function getLatitude() : ?string
    {
        return $this->latitude;
    }
    /**
     * Широта
     *
     * @param string|null $latitude
     *
     * @return self
     */
    public function setLatitude(?string $latitude) : self
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Долгота
     *
     * @return string|null
     */
    public function getLongitude() : ?string
    {
        return $this->longitude;
    }
    /**
     * Долгота
     *
     * @param string|null $longitude
     *
     * @return self
     */
    public function setLongitude(?string $longitude) : self
    {
        $this->longitude = $longitude;
        return $this;
    }
}