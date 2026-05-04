<?php

namespace glook\PecomSdk\Generated\Model;

class BranchDivision
{
    /**
     * Идентификатор города, которому принадлежит отделение
     *
     * @var string
     */
    protected $cityId;
    /**
     * Наименование типа отделения
     *
     * @var string
     */
    protected $departmentType;
    /**
     * ID типа отделения. 0 - Отделение компании, 1 - ПВЗ, 4 - Основное отделение компании в филиале
     *
     * @var int
     */
    protected $departmentTypeId;
    /**
     * Приоритет автоматической подстановки отделений на стороне ПЭК (используется, если в запросах не указано конкретное отделение)
     *
     * @var int
     */
    protected $divisionPriority;
    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @var string
     */
    protected $id;
    /**
     * Значение true, если осуществляется только ПРИЁМ груза
     *
     * @var bool
     */
    protected $isAcceptanceOnly;
    /**
     * В актуальной версии протокола не используется
     *
     * @var bool
     */
    protected $isPartialDistributionAllowed;
    /**
     * Наименование отделения
     *
     * @var string
     */
    protected $name;
    /**
     * Информация о складе. Выводится один к одному. Одно отделение — один склад. Если массив возвращается пустым, значит отделение в ближайшее время планируется к закрытию.
     *
     * @var Warehouse[]
     */
    protected $warehouses;
    /**
     * Идентификатор города, которому принадлежит отделение
     *
     * @return string
     */
    public function getCityId() : string
    {
        return $this->cityId;
    }
    /**
     * Идентификатор города, которому принадлежит отделение
     *
     * @param string $cityId
     *
     * @return self
     */
    public function setCityId(string $cityId) : self
    {
        $this->cityId = $cityId;
        return $this;
    }
    /**
     * Наименование типа отделения
     *
     * @return string
     */
    public function getDepartmentType() : string
    {
        return $this->departmentType;
    }
    /**
     * Наименование типа отделения
     *
     * @param string $departmentType
     *
     * @return self
     */
    public function setDepartmentType(string $departmentType) : self
    {
        $this->departmentType = $departmentType;
        return $this;
    }
    /**
     * ID типа отделения. 0 - Отделение компании, 1 - ПВЗ, 4 - Основное отделение компании в филиале
     *
     * @return int
     */
    public function getDepartmentTypeId() : int
    {
        return $this->departmentTypeId;
    }
    /**
     * ID типа отделения. 0 - Отделение компании, 1 - ПВЗ, 4 - Основное отделение компании в филиале
     *
     * @param int $departmentTypeId
     *
     * @return self
     */
    public function setDepartmentTypeId(int $departmentTypeId) : self
    {
        $this->departmentTypeId = $departmentTypeId;
        return $this;
    }
    /**
     * Приоритет автоматической подстановки отделений на стороне ПЭК (используется, если в запросах не указано конкретное отделение)
     *
     * @return int
     */
    public function getDivisionPriority() : int
    {
        return $this->divisionPriority;
    }
    /**
     * Приоритет автоматической подстановки отделений на стороне ПЭК (используется, если в запросах не указано конкретное отделение)
     *
     * @param int $divisionPriority
     *
     * @return self
     */
    public function setDivisionPriority(int $divisionPriority) : self
    {
        $this->divisionPriority = $divisionPriority;
        return $this;
    }
    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Значение true, если осуществляется только ПРИЁМ груза
     *
     * @return bool
     */
    public function getIsAcceptanceOnly() : bool
    {
        return $this->isAcceptanceOnly;
    }
    /**
     * Значение true, если осуществляется только ПРИЁМ груза
     *
     * @param bool $isAcceptanceOnly
     *
     * @return self
     */
    public function setIsAcceptanceOnly(bool $isAcceptanceOnly) : self
    {
        $this->isAcceptanceOnly = $isAcceptanceOnly;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @return bool
     */
    public function getIsPartialDistributionAllowed() : bool
    {
        return $this->isPartialDistributionAllowed;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @param bool $isPartialDistributionAllowed
     *
     * @return self
     */
    public function setIsPartialDistributionAllowed(bool $isPartialDistributionAllowed) : self
    {
        $this->isPartialDistributionAllowed = $isPartialDistributionAllowed;
        return $this;
    }
    /**
     * Наименование отделения
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Наименование отделения
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Информация о складе. Выводится один к одному. Одно отделение — один склад. Если массив возвращается пустым, значит отделение в ближайшее время планируется к закрытию.
     *
     * @return Warehouse[]
     */
    public function getWarehouses() : array
    {
        return $this->warehouses;
    }
    /**
     * Информация о складе. Выводится один к одному. Одно отделение — один склад. Если массив возвращается пустым, значит отделение в ближайшее время планируется к закрытию.
     *
     * @param Warehouse[] $warehouses
     *
     * @return self
     */
    public function setWarehouses(array $warehouses) : self
    {
        $this->warehouses = $warehouses;
        return $this;
    }
}