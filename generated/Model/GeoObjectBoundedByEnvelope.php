<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectBoundedByEnvelope
{
    /**
     * Нижняя граница координат (долгота широта)
     *
     * @var string
     */
    protected $lowerCorner;
    /**
     * Верхняя граница координат (долгота широта)
     *
     * @var string
     */
    protected $upperCorner;
    /**
     * Нижняя граница координат (долгота широта)
     *
     * @return string
     */
    public function getLowerCorner() : string
    {
        return $this->lowerCorner;
    }
    /**
     * Нижняя граница координат (долгота широта)
     *
     * @param string $lowerCorner
     *
     * @return self
     */
    public function setLowerCorner(string $lowerCorner) : self
    {
        $this->lowerCorner = $lowerCorner;
        return $this;
    }
    /**
     * Верхняя граница координат (долгота широта)
     *
     * @return string
     */
    public function getUpperCorner() : string
    {
        return $this->upperCorner;
    }
    /**
     * Верхняя граница координат (долгота широта)
     *
     * @param string $upperCorner
     *
     * @return self
     */
    public function setUpperCorner(string $upperCorner) : self
    {
        $this->upperCorner = $upperCorner;
        return $this;
    }
}