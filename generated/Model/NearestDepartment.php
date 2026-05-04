<?php

namespace glook\PecomSdk\Generated\Model;

class NearestDepartment
{
    /**
     * Адрес отделения
     *
     * @var string
     */
    protected $address;
    /**
     * ID филиала, к которому относится отделение (организационная привязка)
     *
     * @var string
     */
    protected $branchId;
    /**
     * Наименование филиала, к которому относится отделение (используется для передачи значения City в методах API)
     *
     * @var string
     */
    protected $branchName;
    /**
     * 
     *
     * @var BranchesCoordinates
     */
    protected $coordinates;
    /**
     * Тип отделения. На текущий момент может быть 3 варианта: «Отделение компании», "Основное отделение филиала компании", «ПВЗ» (этот тип только в массиве `paidDepartments`)
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
     * Наименование отделения
     *
     * @var string
     */
    protected $divisionName;
    /**
     * Электронный адрес отделения
     *
     * @var string
     */
    protected $email;
    /**
     * Не используется. В ответе метода всегда только Активные отделения.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Ограничение на количество мест груза, которое может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var int
     */
    protected $maxCount;
    /**
     * Ограничение на максимальный габарит груза (наибольший размер из длины, ширины и высоты из всех мест), который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var float
     */
    protected $maxDimension;
    /**
     * Ограничение на общий объем груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var float
     */
    protected $maxVolume;
    /**
     * Ограничение на общий вес груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var float
     */
    protected $maxWeight;
    /**
     * Ограничение на максимальный вес одного места груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var float
     */
    protected $maxWeightOnePlace;
    /**
     * Телефон отделения
     *
     * @var string
     */
    protected $phone;
    /**
     * Внутренний приоритет отделения (в рамках данного метода не важен). Отделения с наивысшим приоритетом ПЭК предлагает по умолчанию клиентам.
     *
     * @var int
     */
    protected $priority;
    /**
     * Праздничные и выходные дни отделения вне графика его работы
     *
     * @var string[]
     */
    protected $scheduleHolidayDays;
    /**
     * Сокращенный режим работы
     *
     * @var ScheduleShortWorkDay[]
     */
    protected $scheduleShortWorkDays;
    /**
     * Временная зона, к которой относится отделение
     *
     * @var string
     */
    protected $timeZone;
    /**
     * Идентификатор города, к которому относится отделение. Используется в методе CalculatePrice
     *
     * @var int
     */
    protected $townBitrixId;
    /**
     * ID склада, используется в методах расчета стоимости и подачи заявок
     *
     * @var string
     */
    protected $warehouseId;
    /**
     * Адрес отделения
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * Адрес отделения
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * ID филиала, к которому относится отделение (организационная привязка)
     *
     * @return string
     */
    public function getBranchId() : string
    {
        return $this->branchId;
    }
    /**
     * ID филиала, к которому относится отделение (организационная привязка)
     *
     * @param string $branchId
     *
     * @return self
     */
    public function setBranchId(string $branchId) : self
    {
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * Наименование филиала, к которому относится отделение (используется для передачи значения City в методах API)
     *
     * @return string
     */
    public function getBranchName() : string
    {
        return $this->branchName;
    }
    /**
     * Наименование филиала, к которому относится отделение (используется для передачи значения City в методах API)
     *
     * @param string $branchName
     *
     * @return self
     */
    public function setBranchName(string $branchName) : self
    {
        $this->branchName = $branchName;
        return $this;
    }
    /**
     * 
     *
     * @return BranchesCoordinates
     */
    public function getCoordinates() : BranchesCoordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param BranchesCoordinates $coordinates
     *
     * @return self
     */
    public function setCoordinates(BranchesCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Тип отделения. На текущий момент может быть 3 варианта: «Отделение компании», "Основное отделение филиала компании", «ПВЗ» (этот тип только в массиве `paidDepartments`)
     *
     * @return string
     */
    public function getDepartmentType() : string
    {
        return $this->departmentType;
    }
    /**
     * Тип отделения. На текущий момент может быть 3 варианта: «Отделение компании», "Основное отделение филиала компании", «ПВЗ» (этот тип только в массиве `paidDepartments`)
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
     * Наименование отделения
     *
     * @return string
     */
    public function getDivisionName() : string
    {
        return $this->divisionName;
    }
    /**
     * Наименование отделения
     *
     * @param string $divisionName
     *
     * @return self
     */
    public function setDivisionName(string $divisionName) : self
    {
        $this->divisionName = $divisionName;
        return $this;
    }
    /**
     * Электронный адрес отделения
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Электронный адрес отделения
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Не используется. В ответе метода всегда только Активные отделения.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Не используется. В ответе метода всегда только Активные отделения.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Ограничение на количество мест груза, которое может обрабатывать отделение. 0 – ограничений нет.
     *
     * @return int
     */
    public function getMaxCount() : int
    {
        return $this->maxCount;
    }
    /**
     * Ограничение на количество мест груза, которое может обрабатывать отделение. 0 – ограничений нет.
     *
     * @param int $maxCount
     *
     * @return self
     */
    public function setMaxCount(int $maxCount) : self
    {
        $this->maxCount = $maxCount;
        return $this;
    }
    /**
     * Ограничение на максимальный габарит груза (наибольший размер из длины, ширины и высоты из всех мест), который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @return float
     */
    public function getMaxDimension() : float
    {
        return $this->maxDimension;
    }
    /**
     * Ограничение на максимальный габарит груза (наибольший размер из длины, ширины и высоты из всех мест), который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @param float $maxDimension
     *
     * @return self
     */
    public function setMaxDimension(float $maxDimension) : self
    {
        $this->maxDimension = $maxDimension;
        return $this;
    }
    /**
     * Ограничение на общий объем груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @return float
     */
    public function getMaxVolume() : float
    {
        return $this->maxVolume;
    }
    /**
     * Ограничение на общий объем груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @param float $maxVolume
     *
     * @return self
     */
    public function setMaxVolume(float $maxVolume) : self
    {
        $this->maxVolume = $maxVolume;
        return $this;
    }
    /**
     * Ограничение на общий вес груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @return float
     */
    public function getMaxWeight() : float
    {
        return $this->maxWeight;
    }
    /**
     * Ограничение на общий вес груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @param float $maxWeight
     *
     * @return self
     */
    public function setMaxWeight(float $maxWeight) : self
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }
    /**
     * Ограничение на максимальный вес одного места груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @return float
     */
    public function getMaxWeightOnePlace() : float
    {
        return $this->maxWeightOnePlace;
    }
    /**
     * Ограничение на максимальный вес одного места груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @param float $maxWeightOnePlace
     *
     * @return self
     */
    public function setMaxWeightOnePlace(float $maxWeightOnePlace) : self
    {
        $this->maxWeightOnePlace = $maxWeightOnePlace;
        return $this;
    }
    /**
     * Телефон отделения
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Телефон отделения
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Внутренний приоритет отделения (в рамках данного метода не важен). Отделения с наивысшим приоритетом ПЭК предлагает по умолчанию клиентам.
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * Внутренний приоритет отделения (в рамках данного метода не важен). Отделения с наивысшим приоритетом ПЭК предлагает по умолчанию клиентам.
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * Праздничные и выходные дни отделения вне графика его работы
     *
     * @return string[]
     */
    public function getScheduleHolidayDays() : array
    {
        return $this->scheduleHolidayDays;
    }
    /**
     * Праздничные и выходные дни отделения вне графика его работы
     *
     * @param string[] $scheduleHolidayDays
     *
     * @return self
     */
    public function setScheduleHolidayDays(array $scheduleHolidayDays) : self
    {
        $this->scheduleHolidayDays = $scheduleHolidayDays;
        return $this;
    }
    /**
     * Сокращенный режим работы
     *
     * @return ScheduleShortWorkDay[]
     */
    public function getScheduleShortWorkDays() : array
    {
        return $this->scheduleShortWorkDays;
    }
    /**
     * Сокращенный режим работы
     *
     * @param ScheduleShortWorkDay[] $scheduleShortWorkDays
     *
     * @return self
     */
    public function setScheduleShortWorkDays(array $scheduleShortWorkDays) : self
    {
        $this->scheduleShortWorkDays = $scheduleShortWorkDays;
        return $this;
    }
    /**
     * Временная зона, к которой относится отделение
     *
     * @return string
     */
    public function getTimeZone() : string
    {
        return $this->timeZone;
    }
    /**
     * Временная зона, к которой относится отделение
     *
     * @param string $timeZone
     *
     * @return self
     */
    public function setTimeZone(string $timeZone) : self
    {
        $this->timeZone = $timeZone;
        return $this;
    }
    /**
     * Идентификатор города, к которому относится отделение. Используется в методе CalculatePrice
     *
     * @return int
     */
    public function getTownBitrixId() : int
    {
        return $this->townBitrixId;
    }
    /**
     * Идентификатор города, к которому относится отделение. Используется в методе CalculatePrice
     *
     * @param int $townBitrixId
     *
     * @return self
     */
    public function setTownBitrixId(int $townBitrixId) : self
    {
        $this->townBitrixId = $townBitrixId;
        return $this;
    }
    /**
     * ID склада, используется в методах расчета стоимости и подачи заявок
     *
     * @return string
     */
    public function getWarehouseId() : string
    {
        return $this->warehouseId;
    }
    /**
     * ID склада, используется в методах расчета стоимости и подачи заявок
     *
     * @param string $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(string $warehouseId) : self
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }
}