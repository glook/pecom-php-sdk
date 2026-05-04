<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCoordinates
{
    /**
     * Географическая широта
     *
     * @var string|null
     */
    protected $latitude;
    /**
     * Географическая долгота
     *
     * @var string|null
     */
    protected $longitude;
    /**
     * Географическая широта
     *
     * @return string|null
     */
    public function getLatitude() : ?string
    {
        return $this->latitude;
    }
    /**
     * Географическая широта
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
     * Географическая долгота
     *
     * @return string|null
     */
    public function getLongitude() : ?string
    {
        return $this->longitude;
    }
    /**
     * Географическая долгота
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