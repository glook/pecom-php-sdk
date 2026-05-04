<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesAllPostBody
{
    /**
     * Идентификатор филиала (параметры ниже будет проигнорированы)
     *
     * @var string|null
     */
    protected $branchId;
    /**
     * Идентификатор отделения (параметр ниже будет проигнорирован)
     *
     * @var string|null
     */
    protected $divisionId;
    /**
     * Идентификатор склада
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * Идентификатор филиала (параметры ниже будет проигнорированы)
     *
     * @return string|null
     */
    public function getBranchId() : ?string
    {
        return $this->branchId;
    }
    /**
     * Идентификатор филиала (параметры ниже будет проигнорированы)
     *
     * @param string|null $branchId
     *
     * @return self
     */
    public function setBranchId(?string $branchId) : self
    {
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * Идентификатор отделения (параметр ниже будет проигнорирован)
     *
     * @return string|null
     */
    public function getDivisionId() : ?string
    {
        return $this->divisionId;
    }
    /**
     * Идентификатор отделения (параметр ниже будет проигнорирован)
     *
     * @param string|null $divisionId
     *
     * @return self
     */
    public function setDivisionId(?string $divisionId) : self
    {
        $this->divisionId = $divisionId;
        return $this;
    }
    /**
     * Идентификатор склада
     *
     * @return string|null
     */
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * Идентификатор склада
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId) : self
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }
}