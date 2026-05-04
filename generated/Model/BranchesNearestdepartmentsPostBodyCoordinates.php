<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesNearestdepartmentsPostBodyCoordinates
{
    /**
     * Координата широты
     *
     * @var string
     */
    protected $latitude;
    /**
     * Координата долготы
     *
     * @var string
     */
    protected $longitude;
    /**
     * Координата широты
     *
     * @return string
     */
    public function getLatitude() : string
    {
        return $this->latitude;
    }
    /**
     * Координата широты
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude) : self
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Координата долготы
     *
     * @return string
     */
    public function getLongitude() : string
    {
        return $this->longitude;
    }
    /**
     * Координата долготы
     *
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude) : self
    {
        $this->longitude = $longitude;
        return $this;
    }
}