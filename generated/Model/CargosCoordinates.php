<?php

namespace glook\PecomSdk\Generated\Model;

class CargosCoordinates
{
    /**
     * Координата широты
     *
     * @var string|null
     */
    protected $latitude;
    /**
     * Координата долготы
     *
     * @var string|null
     */
    protected $longitude;
    /**
     * Координата широты
     *
     * @return string|null
     */
    public function getLatitude() : ?string
    {
        return $this->latitude;
    }
    /**
     * Координата широты
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
     * Координата долготы
     *
     * @return string|null
     */
    public function getLongitude() : ?string
    {
        return $this->longitude;
    }
    /**
     * Координата долготы
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