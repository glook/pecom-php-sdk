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
     * 
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
     *
     * @return int
     */
    public function getBitrixId() : int
    {
        return $this->bitrixId;
    }
    /**
     * Код филиала
     *
     * @param int $bitrixId
     *
     * @return self
     */
    public function setBitrixId(int $bitrixId) : self
    {
        $this->bitrixId = $bitrixId;
        return $this;
    }
    /**
     * Код филиала
     *
     * @return string
     */
    public function getBranchCode() : string
    {
        return $this->branchCode;
    }
    /**
     * Код филиала
     *
     * @param string $branchCode
     *
     * @return self
     */
    public function setBranchCode(string $branchCode) : self
    {
        $this->branchCode = $branchCode;
        return $this;
    }
    /**
     * Название филиала
     *
     * @return string
     */
    public function getBranchTitle() : string
    {
        return $this->branchTitle;
    }
    /**
     * Название филиала
     *
     * @param string $branchTitle
     *
     * @return self
     */
    public function setBranchTitle(string $branchTitle) : self
    {
        $this->branchTitle = $branchTitle;
        return $this;
    }
    /**
     * Идентификатор филиала
     *
     * @return string
     */
    public function getBranchUID() : string
    {
        return $this->branchUID;
    }
    /**
     * Идентификатор филиала
     *
     * @param string $branchUID
     *
     * @return self
     */
    public function setBranchUID(string $branchUID) : self
    {
        $this->branchUID = $branchUID;
        return $this;
    }
    /**
     * 
     *
     * @return BranchesCoordinates
     */
    public function getWarehousePoint() : BranchesCoordinates
    {
        return $this->warehousePoint;
    }
    /**
     * 
     *
     * @param BranchesCoordinates $warehousePoint
     *
     * @return self
     */
    public function setWarehousePoint(BranchesCoordinates $warehousePoint) : self
    {
        $this->warehousePoint = $warehousePoint;
        return $this;
    }
    /**
     * Идентификатор зоны
     *
     * @return string
     */
    public function getZoneId() : string
    {
        return $this->zoneId;
    }
    /**
     * Идентификатор зоны
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId) : self
    {
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * Наименование зоны
     *
     * @return string
     */
    public function getZoneName() : string
    {
        return $this->zoneName;
    }
    /**
     * Наименование зоны
     *
     * @param string $zoneName
     *
     * @return self
     */
    public function setZoneName(string $zoneName) : self
    {
        $this->zoneName = $zoneName;
        return $this;
    }
}