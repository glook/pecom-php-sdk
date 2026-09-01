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
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * Координата широты
     */
    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Координата долготы
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * Координата долготы
     */
    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
