<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseReceiverCoordinates
{
    /**
     * 
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * 
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * 
     *
     * @return float|null
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * 
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
     * 
     *
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    /**
     * 
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