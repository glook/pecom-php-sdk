<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMap
{
    /**
     * Наименование филиала ПЭК, к которому относится маршрутный лист
     *
     * @var string|null
     */
    protected $branchName;
    /**
     * Контрагенты в маршрутном листе
     *
     * @var CounterpartInRouteMap[]|null
     */
    protected $counterpartsInRouteMap;
    /**
     * ФИО водителя
     *
     * @var string|null
     */
    protected $driverFIO;
    /**
     * паспортные данные водителя (используются для заказа пропусков)
     *
     * @var string|null
     */
    protected $driverPassport;
    /**
     * Телефон водителя
     *
     * @var string|null
     */
    protected $driverPhone;
    /**
     * Внутренний идентификатор маршрутного листа
     *
     * @var string|null
     */
    protected $routeMapUID;
    /**
     * наименование марки автомобиля водитлея
     *
     * @var string|null
     */
    protected $vehicleBrand;
    /**
     * государственный номер автомобиля
     *
     * @var string|null
     */
    protected $vehicleNumber;
    /**
     * Наименование филиала ПЭК, к которому относится маршрутный лист
     *
     * @return string|null
     */
    public function getBranchName() : ?string
    {
        return $this->branchName;
    }
    /**
     * Наименование филиала ПЭК, к которому относится маршрутный лист
     *
     * @param string|null $branchName
     *
     * @return self
     */
    public function setBranchName(?string $branchName) : self
    {
        $this->branchName = $branchName;
        return $this;
    }
    /**
     * Контрагенты в маршрутном листе
     *
     * @return CounterpartInRouteMap[]|null
     */
    public function getCounterpartsInRouteMap() : ?array
    {
        return $this->counterpartsInRouteMap;
    }
    /**
     * Контрагенты в маршрутном листе
     *
     * @param CounterpartInRouteMap[]|null $counterpartsInRouteMap
     *
     * @return self
     */
    public function setCounterpartsInRouteMap(?array $counterpartsInRouteMap) : self
    {
        $this->counterpartsInRouteMap = $counterpartsInRouteMap;
        return $this;
    }
    /**
     * ФИО водителя
     *
     * @return string|null
     */
    public function getDriverFIO() : ?string
    {
        return $this->driverFIO;
    }
    /**
     * ФИО водителя
     *
     * @param string|null $driverFIO
     *
     * @return self
     */
    public function setDriverFIO(?string $driverFIO) : self
    {
        $this->driverFIO = $driverFIO;
        return $this;
    }
    /**
     * паспортные данные водителя (используются для заказа пропусков)
     *
     * @return string|null
     */
    public function getDriverPassport() : ?string
    {
        return $this->driverPassport;
    }
    /**
     * паспортные данные водителя (используются для заказа пропусков)
     *
     * @param string|null $driverPassport
     *
     * @return self
     */
    public function setDriverPassport(?string $driverPassport) : self
    {
        $this->driverPassport = $driverPassport;
        return $this;
    }
    /**
     * Телефон водителя
     *
     * @return string|null
     */
    public function getDriverPhone() : ?string
    {
        return $this->driverPhone;
    }
    /**
     * Телефон водителя
     *
     * @param string|null $driverPhone
     *
     * @return self
     */
    public function setDriverPhone(?string $driverPhone) : self
    {
        $this->driverPhone = $driverPhone;
        return $this;
    }
    /**
     * Внутренний идентификатор маршрутного листа
     *
     * @return string|null
     */
    public function getRouteMapUID() : ?string
    {
        return $this->routeMapUID;
    }
    /**
     * Внутренний идентификатор маршрутного листа
     *
     * @param string|null $routeMapUID
     *
     * @return self
     */
    public function setRouteMapUID(?string $routeMapUID) : self
    {
        $this->routeMapUID = $routeMapUID;
        return $this;
    }
    /**
     * наименование марки автомобиля водитлея
     *
     * @return string|null
     */
    public function getVehicleBrand() : ?string
    {
        return $this->vehicleBrand;
    }
    /**
     * наименование марки автомобиля водитлея
     *
     * @param string|null $vehicleBrand
     *
     * @return self
     */
    public function setVehicleBrand(?string $vehicleBrand) : self
    {
        $this->vehicleBrand = $vehicleBrand;
        return $this;
    }
    /**
     * государственный номер автомобиля
     *
     * @return string|null
     */
    public function getVehicleNumber() : ?string
    {
        return $this->vehicleNumber;
    }
    /**
     * государственный номер автомобиля
     *
     * @param string|null $vehicleNumber
     *
     * @return self
     */
    public function setVehicleNumber(?string $vehicleNumber) : self
    {
        $this->vehicleNumber = $vehicleNumber;
        return $this;
    }
}