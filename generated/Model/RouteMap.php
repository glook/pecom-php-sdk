<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMap
{
    /**
     * Наименование филиала ПЭК, к которому относится маршрутный лист
     *
     * @var null|string
     */
    protected $branchName;

    /**
     * Контрагенты в маршрутном листе
     *
     * @var null|CounterpartInRouteMap[]
     */
    protected $counterpartsInRouteMap;

    /**
     * ФИО водителя
     *
     * @var null|string
     */
    protected $driverFIO;

    /**
     * паспортные данные водителя (используются для заказа пропусков)
     *
     * @var null|string
     */
    protected $driverPassport;

    /**
     * Телефон водителя
     *
     * @var null|string
     */
    protected $driverPhone;

    /**
     * Внутренний идентификатор маршрутного листа
     *
     * @var null|string
     */
    protected $routeMapUID;

    /**
     * наименование марки автомобиля водитлея
     *
     * @var null|string
     */
    protected $vehicleBrand;

    /**
     * государственный номер автомобиля
     *
     * @var null|string
     */
    protected $vehicleNumber;

    /**
     * Наименование филиала ПЭК, к которому относится маршрутный лист
     */
    public function getBranchName(): ?string
    {
        return $this->branchName;
    }

    /**
     * Наименование филиала ПЭК, к которому относится маршрутный лист
     */
    public function setBranchName(?string $branchName): self
    {
        $this->branchName = $branchName;

        return $this;
    }

    /**
     * Контрагенты в маршрутном листе
     *
     * @return null|CounterpartInRouteMap[]
     */
    public function getCounterpartsInRouteMap(): ?array
    {
        return $this->counterpartsInRouteMap;
    }

    /**
     * Контрагенты в маршрутном листе
     *
     * @param null|CounterpartInRouteMap[] $counterpartsInRouteMap
     */
    public function setCounterpartsInRouteMap(?array $counterpartsInRouteMap): self
    {
        $this->counterpartsInRouteMap = $counterpartsInRouteMap;

        return $this;
    }

    /**
     * ФИО водителя
     */
    public function getDriverFIO(): ?string
    {
        return $this->driverFIO;
    }

    /**
     * ФИО водителя
     */
    public function setDriverFIO(?string $driverFIO): self
    {
        $this->driverFIO = $driverFIO;

        return $this;
    }

    /**
     * паспортные данные водителя (используются для заказа пропусков)
     */
    public function getDriverPassport(): ?string
    {
        return $this->driverPassport;
    }

    /**
     * паспортные данные водителя (используются для заказа пропусков)
     */
    public function setDriverPassport(?string $driverPassport): self
    {
        $this->driverPassport = $driverPassport;

        return $this;
    }

    /**
     * Телефон водителя
     */
    public function getDriverPhone(): ?string
    {
        return $this->driverPhone;
    }

    /**
     * Телефон водителя
     */
    public function setDriverPhone(?string $driverPhone): self
    {
        $this->driverPhone = $driverPhone;

        return $this;
    }

    /**
     * Внутренний идентификатор маршрутного листа
     */
    public function getRouteMapUID(): ?string
    {
        return $this->routeMapUID;
    }

    /**
     * Внутренний идентификатор маршрутного листа
     */
    public function setRouteMapUID(?string $routeMapUID): self
    {
        $this->routeMapUID = $routeMapUID;

        return $this;
    }

    /**
     * наименование марки автомобиля водитлея
     */
    public function getVehicleBrand(): ?string
    {
        return $this->vehicleBrand;
    }

    /**
     * наименование марки автомобиля водитлея
     */
    public function setVehicleBrand(?string $vehicleBrand): self
    {
        $this->vehicleBrand = $vehicleBrand;

        return $this;
    }

    /**
     * государственный номер автомобиля
     */
    public function getVehicleNumber(): ?string
    {
        return $this->vehicleNumber;
    }

    /**
     * государственный номер автомобиля
     */
    public function setVehicleNumber(?string $vehicleNumber): self
    {
        $this->vehicleNumber = $vehicleNumber;

        return $this;
    }
}
