<?php

namespace glook\PecomSdk\Generated\Model;

class Warehouse
{
    /**
     * Адрес склада. Максимально короткий адрес для использования в оповещениях
     *
     * @var string
     */
    protected $address;
    /**
     * Полный адрес склада
     *
     * @var string
     */
    protected $addressDivision;
    /**
     * Координаты GPS склада (устаревший формат строки)
     *
     * @var string
     */
    protected $coordinates;
    /**
     * 
     *
     * @var BranchesCoordinates
     */
    protected $coordinatesobj;
    /**
     * В актуальной версии протокола не используется
     *
     * @var string|null
     */
    protected $isRestrictions;
    /**
     * Дата прекращения работы отделения Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $departmentClosingDate;
    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @var string
     */
    protected $divisionId;
    /**
     * Наименование отделения
     *
     * @var string
     */
    protected $divisionName;
    /**
     * Время работы отделения. Если нет элемента с конкретным днем недели, значит в этот день отделение не работает.
     *
     * @var DivisionTimeOfWork[]
     */
    protected $divisionTimeOfWork;
    /**
     * E-mail
     *
     * @var string
     */
    protected $email;
    /**
     * Последняя дата доступности отделения для подачи заявок в связи с закрытием
     *
     * @var string|null
     */
    protected $endOfAvailabilityBeforeClosing;
    /**
     * Дата запрета расчета стоимости по данному отделению в связи с плановым закрытием
     *
     * @var string|null
     */
    protected $endOfCostCalculationAvailability;
    /**
     * Идентификатор склада. ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок!
     *
     * @var string
     */
    protected $id;
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation":[]` и ограничения по габаритам
     *
     * @var bool
     */
    protected $isAcceptanceOnly;
    /**
     * В актуальной версии протокола не используется
     *
     * @var bool
     */
    protected $isFreightSurcharge;
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     *
     * @var bool
     */
    protected $isWarehouseAcceptsFreights;
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     *
     * @var bool
     */
    protected $isWarehouseGivesFreights;
    /**
     * Максимальный габарит грузоместа, м.
     *
     * @var float
     */
    protected $maxDimension;
    /**
     * Максимально допустимый объем груза, м.куб.
     *
     * @var float
     */
    protected $maxVolume;
    /**
     * Максимально допустимый вес груза, кг.
     *
     * @var float
     */
    protected $maxWeight;
    /**
     * Максимально допустимый вес грузоместа, кг.
     *
     * @var float
     */
    protected $maxWeightPerPlace;
    /**
     * Наименование склада
     *
     * @var string
     */
    protected $name;
    /**
     * Подробное описание, как добраться до отделения
     *
     * @var string
     */
    protected $pointerDescription;
    /**
     * Выходные и праздничные дни
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
     * Телефон
     *
     * @var string
     */
    protected $telephone;
    /**
     * В актуальной версии протокола не используется
     *
     * @var mixed[]
     */
    protected $timeOfWork;
    /**
     * Буквенный уникальный код склада
     *
     * @var string
     */
    protected $warehouseCode;
    /**
     * Адрес склада. Максимально короткий адрес для использования в оповещениях
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * Адрес склада. Максимально короткий адрес для использования в оповещениях
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
     * Полный адрес склада
     *
     * @return string
     */
    public function getAddressDivision() : string
    {
        return $this->addressDivision;
    }
    /**
     * Полный адрес склада
     *
     * @param string $addressDivision
     *
     * @return self
     */
    public function setAddressDivision(string $addressDivision) : self
    {
        $this->addressDivision = $addressDivision;
        return $this;
    }
    /**
     * Координаты GPS склада (устаревший формат строки)
     *
     * @return string
     */
    public function getCoordinates() : string
    {
        return $this->coordinates;
    }
    /**
     * Координаты GPS склада (устаревший формат строки)
     *
     * @param string $coordinates
     *
     * @return self
     */
    public function setCoordinates(string $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * 
     *
     * @return BranchesCoordinates
     */
    public function getCoordinatesobj() : BranchesCoordinates
    {
        return $this->coordinatesobj;
    }
    /**
     * 
     *
     * @param BranchesCoordinates $coordinatesobj
     *
     * @return self
     */
    public function setCoordinatesobj(BranchesCoordinates $coordinatesobj) : self
    {
        $this->coordinatesobj = $coordinatesobj;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @return string|null
     */
    public function getIsRestrictions() : ?string
    {
        return $this->isRestrictions;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @param string|null $isRestrictions
     *
     * @return self
     */
    public function setIsRestrictions(?string $isRestrictions) : self
    {
        $this->isRestrictions = $isRestrictions;
        return $this;
    }
    /**
     * Дата прекращения работы отделения Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getDepartmentClosingDate() : ?string
    {
        return $this->departmentClosingDate;
    }
    /**
     * Дата прекращения работы отделения Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $departmentClosingDate
     *
     * @return self
     */
    public function setDepartmentClosingDate(?string $departmentClosingDate) : self
    {
        $this->departmentClosingDate = $departmentClosingDate;
        return $this;
    }
    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @return string
     */
    public function getDivisionId() : string
    {
        return $this->divisionId;
    }
    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @param string $divisionId
     *
     * @return self
     */
    public function setDivisionId(string $divisionId) : self
    {
        $this->divisionId = $divisionId;
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
     * Время работы отделения. Если нет элемента с конкретным днем недели, значит в этот день отделение не работает.
     *
     * @return DivisionTimeOfWork[]
     */
    public function getDivisionTimeOfWork() : array
    {
        return $this->divisionTimeOfWork;
    }
    /**
     * Время работы отделения. Если нет элемента с конкретным днем недели, значит в этот день отделение не работает.
     *
     * @param DivisionTimeOfWork[] $divisionTimeOfWork
     *
     * @return self
     */
    public function setDivisionTimeOfWork(array $divisionTimeOfWork) : self
    {
        $this->divisionTimeOfWork = $divisionTimeOfWork;
        return $this;
    }
    /**
     * E-mail
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * E-mail
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
     * Последняя дата доступности отделения для подачи заявок в связи с закрытием
     *
     * @return string|null
     */
    public function getEndOfAvailabilityBeforeClosing() : ?string
    {
        return $this->endOfAvailabilityBeforeClosing;
    }
    /**
     * Последняя дата доступности отделения для подачи заявок в связи с закрытием
     *
     * @param string|null $endOfAvailabilityBeforeClosing
     *
     * @return self
     */
    public function setEndOfAvailabilityBeforeClosing(?string $endOfAvailabilityBeforeClosing) : self
    {
        $this->endOfAvailabilityBeforeClosing = $endOfAvailabilityBeforeClosing;
        return $this;
    }
    /**
     * Дата запрета расчета стоимости по данному отделению в связи с плановым закрытием
     *
     * @return string|null
     */
    public function getEndOfCostCalculationAvailability() : ?string
    {
        return $this->endOfCostCalculationAvailability;
    }
    /**
     * Дата запрета расчета стоимости по данному отделению в связи с плановым закрытием
     *
     * @param string|null $endOfCostCalculationAvailability
     *
     * @return self
     */
    public function setEndOfCostCalculationAvailability(?string $endOfCostCalculationAvailability) : self
    {
        $this->endOfCostCalculationAvailability = $endOfCostCalculationAvailability;
        return $this;
    }
    /**
     * Идентификатор склада. ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок!
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Идентификатор склада. ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок!
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
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation":[]` и ограничения по габаритам
     *
     * @return bool
     */
    public function getIsAcceptanceOnly() : bool
    {
        return $this->isAcceptanceOnly;
    }
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation":[]` и ограничения по габаритам
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
    public function getIsFreightSurcharge() : bool
    {
        return $this->isFreightSurcharge;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @param bool $isFreightSurcharge
     *
     * @return self
     */
    public function setIsFreightSurcharge(bool $isFreightSurcharge) : self
    {
        $this->isFreightSurcharge = $isFreightSurcharge;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     *
     * @return bool
     */
    public function getIsWarehouseAcceptsFreights() : bool
    {
        return $this->isWarehouseAcceptsFreights;
    }
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     *
     * @param bool $isWarehouseAcceptsFreights
     *
     * @return self
     */
    public function setIsWarehouseAcceptsFreights(bool $isWarehouseAcceptsFreights) : self
    {
        $this->isWarehouseAcceptsFreights = $isWarehouseAcceptsFreights;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     *
     * @return bool
     */
    public function getIsWarehouseGivesFreights() : bool
    {
        return $this->isWarehouseGivesFreights;
    }
    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     *
     * @param bool $isWarehouseGivesFreights
     *
     * @return self
     */
    public function setIsWarehouseGivesFreights(bool $isWarehouseGivesFreights) : self
    {
        $this->isWarehouseGivesFreights = $isWarehouseGivesFreights;
        return $this;
    }
    /**
     * Максимальный габарит грузоместа, м.
     *
     * @return float
     */
    public function getMaxDimension() : float
    {
        return $this->maxDimension;
    }
    /**
     * Максимальный габарит грузоместа, м.
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
     * Максимально допустимый объем груза, м.куб.
     *
     * @return float
     */
    public function getMaxVolume() : float
    {
        return $this->maxVolume;
    }
    /**
     * Максимально допустимый объем груза, м.куб.
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
     * Максимально допустимый вес груза, кг.
     *
     * @return float
     */
    public function getMaxWeight() : float
    {
        return $this->maxWeight;
    }
    /**
     * Максимально допустимый вес груза, кг.
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
     * Максимально допустимый вес грузоместа, кг.
     *
     * @return float
     */
    public function getMaxWeightPerPlace() : float
    {
        return $this->maxWeightPerPlace;
    }
    /**
     * Максимально допустимый вес грузоместа, кг.
     *
     * @param float $maxWeightPerPlace
     *
     * @return self
     */
    public function setMaxWeightPerPlace(float $maxWeightPerPlace) : self
    {
        $this->maxWeightPerPlace = $maxWeightPerPlace;
        return $this;
    }
    /**
     * Наименование склада
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Наименование склада
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
     * Подробное описание, как добраться до отделения
     *
     * @return string
     */
    public function getPointerDescription() : string
    {
        return $this->pointerDescription;
    }
    /**
     * Подробное описание, как добраться до отделения
     *
     * @param string $pointerDescription
     *
     * @return self
     */
    public function setPointerDescription(string $pointerDescription) : self
    {
        $this->pointerDescription = $pointerDescription;
        return $this;
    }
    /**
     * Выходные и праздничные дни
     *
     * @return string[]
     */
    public function getScheduleHolidayDays() : array
    {
        return $this->scheduleHolidayDays;
    }
    /**
     * Выходные и праздничные дни
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
     * Телефон
     *
     * @return string
     */
    public function getTelephone() : string
    {
        return $this->telephone;
    }
    /**
     * Телефон
     *
     * @param string $telephone
     *
     * @return self
     */
    public function setTelephone(string $telephone) : self
    {
        $this->telephone = $telephone;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @return mixed[]
     */
    public function getTimeOfWork() : array
    {
        return $this->timeOfWork;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @param mixed[] $timeOfWork
     *
     * @return self
     */
    public function setTimeOfWork(array $timeOfWork) : self
    {
        $this->timeOfWork = $timeOfWork;
        return $this;
    }
    /**
     * Буквенный уникальный код склада
     *
     * @return string
     */
    public function getWarehouseCode() : string
    {
        return $this->warehouseCode;
    }
    /**
     * Буквенный уникальный код склада
     *
     * @param string $warehouseCode
     *
     * @return self
     */
    public function setWarehouseCode(string $warehouseCode) : self
    {
        $this->warehouseCode = $warehouseCode;
        return $this;
    }
}