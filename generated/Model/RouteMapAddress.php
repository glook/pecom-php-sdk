<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapAddress
{
    /**
     * Координаты, по которым будут выполняться операции забора/доставки грузов
     *
     * @var CargosCoordinates|null
     */
    protected $coordinates;
    /**
     * Датализация адреса
     *
     * @var CargosGeoData|null
     */
    protected $geoData;
    /**
     * Перечень строковых представлений адресов — как они указаны в системах ПЭК
     *
     * @var string[]|null
     */
    protected $operationAddresses;
    /**
     * если на адрес в один день будет назначено более 1 машины, то в массиве будет 2 элемента, каждый содержит информацию об одном маршрутном листе/водителе
     *
     * @var RouteMap[]|null
     */
    protected $routeMaps;
    /**
     * Координаты, по которым будут выполняться операции забора/доставки грузов
     *
     * @return CargosCoordinates|null
     */
    public function getCoordinates() : ?CargosCoordinates
    {
        return $this->coordinates;
    }
    /**
     * Координаты, по которым будут выполняться операции забора/доставки грузов
     *
     * @param CargosCoordinates|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?CargosCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Датализация адреса
     *
     * @return CargosGeoData|null
     */
    public function getGeoData() : ?CargosGeoData
    {
        return $this->geoData;
    }
    /**
     * Датализация адреса
     *
     * @param CargosGeoData|null $geoData
     *
     * @return self
     */
    public function setGeoData(?CargosGeoData $geoData) : self
    {
        $this->geoData = $geoData;
        return $this;
    }
    /**
     * Перечень строковых представлений адресов — как они указаны в системах ПЭК
     *
     * @return string[]|null
     */
    public function getOperationAddresses() : ?array
    {
        return $this->operationAddresses;
    }
    /**
     * Перечень строковых представлений адресов — как они указаны в системах ПЭК
     *
     * @param string[]|null $operationAddresses
     *
     * @return self
     */
    public function setOperationAddresses(?array $operationAddresses) : self
    {
        $this->operationAddresses = $operationAddresses;
        return $this;
    }
    /**
     * если на адрес в один день будет назначено более 1 машины, то в массиве будет 2 элемента, каждый содержит информацию об одном маршрутном листе/водителе
     *
     * @return RouteMap[]|null
     */
    public function getRouteMaps() : ?array
    {
        return $this->routeMaps;
    }
    /**
     * если на адрес в один день будет назначено более 1 машины, то в массиве будет 2 элемента, каждый содержит информацию об одном маршрутном листе/водителе
     *
     * @param RouteMap[]|null $routeMaps
     *
     * @return self
     */
    public function setRouteMaps(?array $routeMaps) : self
    {
        $this->routeMaps = $routeMaps;
        return $this;
    }
}