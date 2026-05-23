<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesCoordinates
{
    /**
     * Координата широты.
     *
     * @var float
     */
    protected $latitude;

    /**
     * Координата долготы.
     *
     * @var float
     */
    protected $longitude;

    /**
     * Координата широты.
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Координата широты.
     */
    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Координата долготы.
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Координата долготы.
     */
    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
