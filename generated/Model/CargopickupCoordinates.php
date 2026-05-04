<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupCoordinates
{
    /**
     * 
     *
     * @var string|null
     */
    protected $latitude;
    /**
     * 
     *
     * @var string|null
     */
    protected $longitude;
    /**
     * 
     *
     * @return string|null
     */
    public function getLatitude() : ?string
    {
        return $this->latitude;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getLongitude() : ?string
    {
        return $this->longitude;
    }
    /**
     * 
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