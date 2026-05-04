<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesCoordinates
{
    /**
     * Координата широты
     *
     * @var float
     */
    protected $latitude;
    /**
     * Координата долготы
     *
     * @var float
     */
    protected $longitude;
    /**
     * Координата широты
     *
     * @return float
     */
    public function getLatitude() : float
    {
        return $this->latitude;
    }
    /**
     * Координата широты
     *
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude(float $latitude) : self
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Координата долготы
     *
     * @return float
     */
    public function getLongitude() : float
    {
        return $this->longitude;
    }
    /**
     * Координата долготы
     *
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude(float $longitude) : self
    {
        $this->longitude = $longitude;
        return $this;
    }
}