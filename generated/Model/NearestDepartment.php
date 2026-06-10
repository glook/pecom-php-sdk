<?php

namespace glook\PecomSdk\Generated\Model;

class NearestDepartment
{
    /**
     * Адрес отделения.
     *
     * @var string
     */
    protected $address;

    /**
     * ID филиала, к которому относится отделение (организационная привязка).
     *
     * @var string
     */
    protected $branchId;

    /**
     * Наименование филиала, к которому относится отделение (используется для передачи значения City в методах API).
     *
     * @var string
     */
    protected $branchName;

    /**
     * Координаты отделения.
     *
     * @var BranchesCoordinates
     */
    protected $coordinates;

    /**
     * Тип отделения. На текущий момент может быть 3 варианта: «Отделение компании», "Основное отделение филиала компании", «ПВЗ» (этот тип только в массиве `paidDepartments`).
     *
     * @var string
     */
    protected $departmentType;

    /**
     * ID типа отделения. 0 - Отделение компании, 1 - ПВЗ, 4 - Основное отделение компании в филиале.
     *
     * @var int
     */
    protected $departmentTypeId;

    /**
     * Наименование отделения.
     *
     * @var string
     */
    protected $divisionName;

    /**
     * Электронный адрес отделения.
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
     * @var null|int
     */
    protected $maxCount;

    /**
     * Ограничение на максимальный габарит груза (наибольший размер из длины, ширины и высоты из всех мест), который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var null|float
     */
    protected $maxDimension;

    /**
     * Ограничение на общий объем груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var null|float
     */
    protected $maxVolume;

    /**
     * Ограничение на общий вес груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var null|float
     */
    protected $maxWeight;

    /**
     * Ограничение на максимальный вес одного места груза, который может обрабатывать отделение. 0 – ограничений нет.
     *
     * @var null|float
     */
    protected $maxWeightOnePlace;

    /**
     * Телефон отделения.
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
     * Праздничные и выходные дни отделения вне графика его работы.
     *
     * @var string[]
     */
    protected $scheduleHolidayDays;

    /**
     * Сокращенный режим работы.
     *
     * @var ScheduleShortWorkDay[]
     */
    protected $scheduleShortWorkDays;

    /**
     * Временная зона, к которой относится отделение.
     *
     * @var string
     */
    protected $timeZone;

    /**
     * Идентификатор города, к которому относится отделение. Используется в методе CalculatePrice.
     *
     * @var int
     */
    protected $townBitrixId;

    /**
     * ID склада, используется в методах расчета стоимости и подачи заявок.
     *
     * @var null|string
     */
    protected $warehouseId;

    /**
     * Адрес отделения.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Адрес отделения.
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * ID филиала, к которому относится отделение (организационная привязка).
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }

    /**
     * ID филиала, к которому относится отделение (организационная привязка).
     */
    public function setBranchId(string $branchId): self
    {
        $this->branchId = $branchId;

        return $this;
    }

    /**
     * Наименование филиала, к которому относится отделение (используется для передачи значения City в методах API).
     */
    public function getBranchName(): string
    {
        return $this->branchName;
    }

    /**
     * Наименование филиала, к которому относится отделение (используется для передачи значения City в методах API).
     */
    public function setBranchName(string $branchName): self
    {
        $this->branchName = $branchName;

        return $this;
    }

    /**
     * Координаты отделения.
     */
    public function getCoordinates(): BranchesCoordinates
    {
        return $this->coordinates;
    }

    /**
     * Координаты отделения.
     */
    public function setCoordinates(BranchesCoordinates $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Тип отделения. На текущий момент может быть 3 варианта: «Отделение компании», "Основное отделение филиала компании", «ПВЗ» (этот тип только в массиве `paidDepartments`).
     */
    public function getDepartmentType(): string
    {
        return $this->departmentType;
    }

    /**
     * Тип отделения. На текущий момент может быть 3 варианта: «Отделение компании», "Основное отделение филиала компании", «ПВЗ» (этот тип только в массиве `paidDepartments`).
     */
    public function setDepartmentType(string $departmentType): self
    {
        $this->departmentType = $departmentType;

        return $this;
    }

    /**
     * ID типа отделения. 0 - Отделение компании, 1 - ПВЗ, 4 - Основное отделение компании в филиале.
     */
    public function getDepartmentTypeId(): int
    {
        return $this->departmentTypeId;
    }

    /**
     * ID типа отделения. 0 - Отделение компании, 1 - ПВЗ, 4 - Основное отделение компании в филиале.
     */
    public function setDepartmentTypeId(int $departmentTypeId): self
    {
        $this->departmentTypeId = $departmentTypeId;

        return $this;
    }

    /**
     * Наименование отделения.
     */
    public function getDivisionName(): string
    {
        return $this->divisionName;
    }

    /**
     * Наименование отделения.
     */
    public function setDivisionName(string $divisionName): self
    {
        $this->divisionName = $divisionName;

        return $this;
    }

    /**
     * Электронный адрес отделения.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Электронный адрес отделения.
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Не используется. В ответе метода всегда только Активные отделения.
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Не используется. В ответе метода всегда только Активные отделения.
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Ограничение на количество мест груза, которое может обрабатывать отделение. 0 – ограничений нет.
     */
    public function getMaxCount(): ?int
    {
        return $this->maxCount;
    }

    /**
     * Ограничение на количество мест груза, которое может обрабатывать отделение. 0 – ограничений нет.
     */
    public function setMaxCount(?int $maxCount): self
    {
        $this->maxCount = $maxCount;

        return $this;
    }

    /**
     * Ограничение на максимальный габарит груза (наибольший размер из длины, ширины и высоты из всех мест), который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function getMaxDimension(): ?float
    {
        return $this->maxDimension;
    }

    /**
     * Ограничение на максимальный габарит груза (наибольший размер из длины, ширины и высоты из всех мест), который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function setMaxDimension(?float $maxDimension): self
    {
        $this->maxDimension = $maxDimension;

        return $this;
    }

    /**
     * Ограничение на общий объем груза, который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function getMaxVolume(): ?float
    {
        return $this->maxVolume;
    }

    /**
     * Ограничение на общий объем груза, который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function setMaxVolume(?float $maxVolume): self
    {
        $this->maxVolume = $maxVolume;

        return $this;
    }

    /**
     * Ограничение на общий вес груза, который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function getMaxWeight(): ?float
    {
        return $this->maxWeight;
    }

    /**
     * Ограничение на общий вес груза, который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function setMaxWeight(?float $maxWeight): self
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    /**
     * Ограничение на максимальный вес одного места груза, который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function getMaxWeightOnePlace(): ?float
    {
        return $this->maxWeightOnePlace;
    }

    /**
     * Ограничение на максимальный вес одного места груза, который может обрабатывать отделение. 0 – ограничений нет.
     */
    public function setMaxWeightOnePlace(?float $maxWeightOnePlace): self
    {
        $this->maxWeightOnePlace = $maxWeightOnePlace;

        return $this;
    }

    /**
     * Телефон отделения.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Телефон отделения.
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Внутренний приоритет отделения (в рамках данного метода не важен). Отделения с наивысшим приоритетом ПЭК предлагает по умолчанию клиентам.
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * Внутренний приоритет отделения (в рамках данного метода не важен). Отделения с наивысшим приоритетом ПЭК предлагает по умолчанию клиентам.
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Праздничные и выходные дни отделения вне графика его работы.
     *
     * @return string[]
     */
    public function getScheduleHolidayDays(): array
    {
        return $this->scheduleHolidayDays;
    }

    /**
     * Праздничные и выходные дни отделения вне графика его работы.
     *
     * @param string[] $scheduleHolidayDays
     */
    public function setScheduleHolidayDays(array $scheduleHolidayDays): self
    {
        $this->scheduleHolidayDays = $scheduleHolidayDays;

        return $this;
    }

    /**
     * Сокращенный режим работы.
     *
     * @return ScheduleShortWorkDay[]
     */
    public function getScheduleShortWorkDays(): array
    {
        return $this->scheduleShortWorkDays;
    }

    /**
     * Сокращенный режим работы.
     *
     * @param ScheduleShortWorkDay[] $scheduleShortWorkDays
     */
    public function setScheduleShortWorkDays(array $scheduleShortWorkDays): self
    {
        $this->scheduleShortWorkDays = $scheduleShortWorkDays;

        return $this;
    }

    /**
     * Временная зона, к которой относится отделение.
     */
    public function getTimeZone(): string
    {
        return $this->timeZone;
    }

    /**
     * Временная зона, к которой относится отделение.
     */
    public function setTimeZone(string $timeZone): self
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Идентификатор города, к которому относится отделение. Используется в методе CalculatePrice.
     */
    public function getTownBitrixId(): int
    {
        return $this->townBitrixId;
    }

    /**
     * Идентификатор города, к которому относится отделение. Используется в методе CalculatePrice.
     */
    public function setTownBitrixId(int $townBitrixId): self
    {
        $this->townBitrixId = $townBitrixId;

        return $this;
    }

    /**
     * ID склада, используется в методах расчета стоимости и подачи заявок.
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    /**
     * ID склада, используется в методах расчета стоимости и подачи заявок.
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
