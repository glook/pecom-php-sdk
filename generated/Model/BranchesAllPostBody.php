<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesAllPostBody
{
    /**
     * Идентификатор филиала (параметры ниже будет проигнорированы)
     *
     * @var null|string
     */
    protected $branchId;

    /**
     * Идентификатор отделения (параметр ниже будет проигнорирован)
     *
     * @var null|string
     */
    protected $divisionId;

    /**
     * Идентификатор склада
     *
     * @var null|string
     */
    protected $warehouseId;

    /**
     * Идентификатор филиала (параметры ниже будет проигнорированы)
     */
    public function getBranchId(): ?string
    {
        return $this->branchId;
    }

    /**
     * Идентификатор филиала (параметры ниже будет проигнорированы)
     */
    public function setBranchId(?string $branchId): self
    {
        $this->branchId = $branchId;

        return $this;
    }

    /**
     * Идентификатор отделения (параметр ниже будет проигнорирован)
     */
    public function getDivisionId(): ?string
    {
        return $this->divisionId;
    }

    /**
     * Идентификатор отделения (параметр ниже будет проигнорирован)
     */
    public function setDivisionId(?string $divisionId): self
    {
        $this->divisionId = $divisionId;

        return $this;
    }

    /**
     * Идентификатор склада
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    /**
     * Идентификатор склада
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
