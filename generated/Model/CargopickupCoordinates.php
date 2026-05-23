<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupCoordinates
{
    /**
     * @var null|string
     */
    protected $latitude;

    /**
     * @var null|string
     */
    protected $longitude;

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
