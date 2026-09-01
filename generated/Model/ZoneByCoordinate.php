<?php

namespace glook\PecomSdk\Generated\Model;

class ZoneByCoordinate
{
    /**
     * Код филиала
     *
     * @var int
     */
    protected $bitrixId;

    /**
     * Код филиала
     *
     * @var string
     */
    protected $branchCode;

    /**
     * Название филиала
     *
     * @var string
     */
    protected $branchTitle;

    /**
     * Идентификатор филиала
     *
     * @var string
     */
    protected $branchUID;

    /**
     * Координаты «Основного отделения филиала компании», к которому относится адрес
     *
     * @var BranchesCoordinates
     */
    protected $warehousePoint;

    /**
     * Идентификатор зоны
     *
     * @var string
     */
    protected $zoneId;

    /**
     * Наименование зоны
     *
     * @var string
     */
    protected $zoneName;

    /**
     * Код филиала
     */
    public function getBitrixId(): int
    {
        return $this->bitrixId;
    }

    /**
     * Код филиала
     */
    public function setBitrixId(int $bitrixId): self
    {
        $this->bitrixId = $bitrixId;

        return $this;
    }

    /**
     * Код филиала
     */
    public function getBranchCode(): string
    {
        return $this->branchCode;
    }

    /**
     * Код филиала
     */
    public function setBranchCode(string $branchCode): self
    {
        $this->branchCode = $branchCode;

        return $this;
    }

    /**
     * Название филиала
     */
    public function getBranchTitle(): string
    {
        return $this->branchTitle;
    }

    /**
     * Название филиала
     */
    public function setBranchTitle(string $branchTitle): self
    {
        $this->branchTitle = $branchTitle;

        return $this;
    }

    /**
     * Идентификатор филиала
     */
    public function getBranchUID(): string
    {
        return $this->branchUID;
    }

    /**
     * Идентификатор филиала
     */
    public function setBranchUID(string $branchUID): self
    {
        $this->branchUID = $branchUID;

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
     * Идентификатор зоны
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }

    /**
     * Идентификатор зоны
     */
    public function setZoneId(string $zoneId): self
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Наименование зоны
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }

    /**
     * Наименование зоны
     */
    public function setZoneName(string $zoneName): self
    {
        $this->zoneName = $zoneName;

        return $this;
    }
}
