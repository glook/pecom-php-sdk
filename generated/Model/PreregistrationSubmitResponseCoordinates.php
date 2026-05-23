<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseCoordinates
{
    /**
     * @var null|float
     */
    protected $latitude;

    /**
     * @var null|float
     */
    protected $longitude;

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
