<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesFindzonebyaddressPostResponse200
{
    /**
     * Код филиала. В актуальной версии протокола не используется.
     *
     * @var string
     */
    protected $bitrixId;

    /**
     * Код филиала.
     *
     * @var string
     */
    protected $branchCode;

    /**
     * Название филиала.
     *
     * @var string
     */
    protected $branchTitle;

    /**
     * Идентификатор филиала.
     *
     * @var string
     */
    protected $branchUID;

    /**
     * Геоданные адреса.
     *
     * @var BranchesGeoData
     */
    protected $geoData;

    /**
     * ID склада основного отделения филиала.
     *
     * @var string
     */
    protected $mainWarehouseId;

    /**
     * Координаты «Основного отделения филиала компании», к которому относится адрес
     *
     * @var BranchesCoordinates
     */
    protected $warehousePoint;

    /**
     * Идентификатор зоны.
     *
     * @var string
     */
    protected $zoneId;

    /**
     * Наименование зоны.
     *
     * @var string
     */
    protected $zoneName;

    /**
     * Код филиала. В актуальной версии протокола не используется.
     */
    public function getBitrixId(): string
    {
        return $this->bitrixId;
    }

    /**
     * Код филиала. В актуальной версии протокола не используется.
     */
    public function setBitrixId(string $bitrixId): self
    {
        $this->bitrixId = $bitrixId;

        return $this;
    }

    /**
     * Код филиала.
     */
    public function getBranchCode(): string
    {
        return $this->branchCode;
    }

    /**
     * Код филиала.
     */
    public function setBranchCode(string $branchCode): self
    {
        $this->branchCode = $branchCode;

        return $this;
    }

    /**
     * Название филиала.
     */
    public function getBranchTitle(): string
    {
        return $this->branchTitle;
    }

    /**
     * Название филиала.
     */
    public function setBranchTitle(string $branchTitle): self
    {
        $this->branchTitle = $branchTitle;

        return $this;
    }

    /**
     * Идентификатор филиала.
     */
    public function getBranchUID(): string
    {
        return $this->branchUID;
    }

    /**
     * Идентификатор филиала.
     */
    public function setBranchUID(string $branchUID): self
    {
        $this->branchUID = $branchUID;

        return $this;
    }

    /**
     * Геоданные адреса.
     */
    public function getGeoData(): BranchesGeoData
    {
        return $this->geoData;
    }

    /**
     * Геоданные адреса.
     */
    public function setGeoData(BranchesGeoData $geoData): self
    {
        $this->geoData = $geoData;

        return $this;
    }

    /**
     * ID склада основного отделения филиала.
     */
    public function getMainWarehouseId(): string
    {
        return $this->mainWarehouseId;
    }

    /**
     * ID склада основного отделения филиала.
     */
    public function setMainWarehouseId(string $mainWarehouseId): self
    {
        $this->mainWarehouseId = $mainWarehouseId;

        return $this;
    }

    /**
     * Координаты «Основного отделения филиала компании», к которому относится адрес
     */
    public function getWarehousePoint(): BranchesCoordinates
    {
        return $this->warehousePoint;
    }

    /**
     * Координаты «Основного отделения филиала компании», к которому относится адрес
     */
    public function setWarehousePoint(BranchesCoordinates $warehousePoint): self
    {
        $this->warehousePoint = $warehousePoint;

        return $this;
    }

    /**
     * Идентификатор зоны.
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }

    /**
     * Идентификатор зоны.
     */
    public function setZoneId(string $zoneId): self
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Наименование зоны.
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }

    /**
     * Наименование зоны.
     */
    public function setZoneName(string $zoneName): self
    {
        $this->zoneName = $zoneName;

        return $this;
    }
}
