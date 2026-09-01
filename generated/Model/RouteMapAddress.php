<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapAddress
{
    /**
     * Координаты, по которым будут выполняться операции забора/доставки грузов
     *
     * @var null|CargosCoordinates
     */
    protected $coordinates;

    /**
     * Датализация адреса
     *
     * @var null|CargosGeoData
     */
    protected $geoData;

    /**
     * Перечень строковых представлений адресов — как они указаны в системах ПЭК
     *
     * @var null|string[]
     */
    protected $operationAddresses;

    /**
     * если на адрес в один день будет назначено более 1 машины, то в массиве будет 2 элемента, каждый содержит информацию об одном маршрутном листе/водителе
     *
     * @var null|RouteMap[]
     */
    protected $routeMaps;

    /**
     * Координаты, по которым будут выполняться операции забора/доставки грузов
     */
    public function getCoordinates(): ?CargosCoordinates
    {
        return $this->coordinates;
    }

    /**
     * Координаты, по которым будут выполняться операции забора/доставки грузов
     */
    public function setCoordinates(?CargosCoordinates $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Датализация адреса
     */
    public function getGeoData(): ?CargosGeoData
    {
        return $this->geoData;
    }

    /**
     * Датализация адреса
     */
    public function setGeoData(?CargosGeoData $geoData): self
    {
        $this->geoData = $geoData;

        return $this;
    }

    /**
     * Перечень строковых представлений адресов — как они указаны в системах ПЭК
     *
     * @return null|string[]
     */
    public function getOperationAddresses(): ?array
    {
        return $this->operationAddresses;
    }

    /**
     * Перечень строковых представлений адресов — как они указаны в системах ПЭК
     *
     * @param null|string[] $operationAddresses
     */
    public function setOperationAddresses(?array $operationAddresses): self
    {
        $this->operationAddresses = $operationAddresses;

        return $this;
    }

    /**
     * если на адрес в один день будет назначено более 1 машины, то в массиве будет 2 элемента, каждый содержит информацию об одном маршрутном листе/водителе
     *
     * @return null|RouteMap[]
     */
    public function getRouteMaps(): ?array
    {
        return $this->routeMaps;
    }

    /**
     * если на адрес в один день будет назначено более 1 машины, то в массиве будет 2 элемента, каждый содержит информацию об одном маршрутном листе/водителе
     *
     * @param null|RouteMap[] $routeMaps
     */
    public function setRouteMaps(?array $routeMaps): self
    {
        $this->routeMaps = $routeMaps;

        return $this;
    }
}
