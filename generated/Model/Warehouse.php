<?php

namespace glook\PecomSdk\Generated\Model;

class Warehouse
{
    /**
     * Адрес склада. Максимально короткий адрес для использования в оповещениях.
     *
     * @var string
     */
    protected $address;

    /**
     * Полный адрес склада.
     *
     * @var string
     */
    protected $addressDivision;

    /**
     * Координаты GPS склада (устаревший формат строки).
     *
     * @var string
     */
    protected $coordinates;

    /**
     * Координаты GPS склада.
     *
     * @var BranchesCoordinates
     */
    protected $coordinatesobj;

    /**
     * В актуальной версии протокола не используется.
     *
     * @var null|string
     */
    protected $isRestrictions;

    /**
     * Дата прекращения работы отделения Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $departmentClosingDate;

    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок.
     *
     * @var string
     */
    protected $divisionId;

    /**
     * Наименование отделения.
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
     * E-mail.
     *
     * @var string
     */
    protected $email;

    /**
     * Последняя дата доступности отделения для подачи заявок в связи с закрытием
     *
     * @var null|string
     */
    protected $endOfAvailabilityBeforeClosing;

    /**
     * Дата запрета расчета стоимости по данному отделению в связи с плановым закрытием
     *
     * @var null|string
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
     * В актуальной версии протокола не используется.
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
     * Наименование склада.
     *
     * @var string
     */
    protected $name;

    /**
     * Подробное описание, как добраться до отделения.
     *
     * @var string
     */
    protected $pointerDescription;

    /**
     * Выходные и праздничные дни.
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
     * Телефон.
     *
     * @var string
     */
    protected $telephone;

    /**
     * В актуальной версии протокола не используется.
     *
     * @var mixed[]
     */
    protected $timeOfWork;

    /**
     * Буквенный уникальный код склада.
     *
     * @var string
     */
    protected $warehouseCode;

    /**
     * Адрес склада. Максимально короткий адрес для использования в оповещениях.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Адрес склада. Максимально короткий адрес для использования в оповещениях.
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Полный адрес склада.
     */
    public function getAddressDivision(): string
    {
        return $this->addressDivision;
    }

    /**
     * Полный адрес склада.
     */
    public function setAddressDivision(string $addressDivision): self
    {
        $this->addressDivision = $addressDivision;

        return $this;
    }

    /**
     * Координаты GPS склада (устаревший формат строки).
     */
    public function getCoordinates(): string
    {
        return $this->coordinates;
    }

    /**
     * Координаты GPS склада (устаревший формат строки).
     */
    public function setCoordinates(string $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Координаты GPS склада.
     */
    public function getCoordinatesobj(): BranchesCoordinates
    {
        return $this->coordinatesobj;
    }

    /**
     * Координаты GPS склада.
     */
    public function setCoordinatesobj(BranchesCoordinates $coordinatesobj): self
    {
        $this->coordinatesobj = $coordinatesobj;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function getIsRestrictions(): ?string
    {
        return $this->isRestrictions;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function setIsRestrictions(?string $isRestrictions): self
    {
        $this->isRestrictions = $isRestrictions;

        return $this;
    }

    /**
     * Дата прекращения работы отделения Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getDepartmentClosingDate(): ?string
    {
        return $this->departmentClosingDate;
    }

    /**
     * Дата прекращения работы отделения Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setDepartmentClosingDate(?string $departmentClosingDate): self
    {
        $this->departmentClosingDate = $departmentClosingDate;

        return $this;
    }

    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок.
     */
    public function getDivisionId(): string
    {
        return $this->divisionId;
    }

    /**
     * Идентификатор отделения. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок.
     */
    public function setDivisionId(string $divisionId): self
    {
        $this->divisionId = $divisionId;

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
     * Время работы отделения. Если нет элемента с конкретным днем недели, значит в этот день отделение не работает.
     *
     * @return DivisionTimeOfWork[]
     */
    public function getDivisionTimeOfWork(): array
    {
        return $this->divisionTimeOfWork;
    }

    /**
     * Время работы отделения. Если нет элемента с конкретным днем недели, значит в этот день отделение не работает.
     *
     * @param DivisionTimeOfWork[] $divisionTimeOfWork
     */
    public function setDivisionTimeOfWork(array $divisionTimeOfWork): self
    {
        $this->divisionTimeOfWork = $divisionTimeOfWork;

        return $this;
    }

    /**
     * E-mail.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * E-mail.
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Последняя дата доступности отделения для подачи заявок в связи с закрытием
     */
    public function getEndOfAvailabilityBeforeClosing(): ?string
    {
        return $this->endOfAvailabilityBeforeClosing;
    }

    /**
     * Последняя дата доступности отделения для подачи заявок в связи с закрытием
     */
    public function setEndOfAvailabilityBeforeClosing(?string $endOfAvailabilityBeforeClosing): self
    {
        $this->endOfAvailabilityBeforeClosing = $endOfAvailabilityBeforeClosing;

        return $this;
    }

    /**
     * Дата запрета расчета стоимости по данному отделению в связи с плановым закрытием
     */
    public function getEndOfCostCalculationAvailability(): ?string
    {
        return $this->endOfCostCalculationAvailability;
    }

    /**
     * Дата запрета расчета стоимости по данному отделению в связи с плановым закрытием
     */
    public function setEndOfCostCalculationAvailability(?string $endOfCostCalculationAvailability): self
    {
        $this->endOfCostCalculationAvailability = $endOfCostCalculationAvailability;

        return $this;
    }

    /**
     * Идентификатор склада. ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок!
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Идентификатор склада. ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок!
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation":[]` и ограничения по габаритам
     */
    public function getIsAcceptanceOnly(): bool
    {
        return $this->isAcceptanceOnly;
    }

    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation":[]` и ограничения по габаритам
     */
    public function setIsAcceptanceOnly(bool $isAcceptanceOnly): self
    {
        $this->isAcceptanceOnly = $isAcceptanceOnly;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function getIsFreightSurcharge(): bool
    {
        return $this->isFreightSurcharge;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function setIsFreightSurcharge(bool $isFreightSurcharge): self
    {
        $this->isFreightSurcharge = $isFreightSurcharge;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     */
    public function getIsWarehouseAcceptsFreights(): bool
    {
        return $this->isWarehouseAcceptsFreights;
    }

    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     */
    public function setIsWarehouseAcceptsFreights(bool $isWarehouseAcceptsFreights): self
    {
        $this->isWarehouseAcceptsFreights = $isWarehouseAcceptsFreights;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     */
    public function getIsWarehouseGivesFreights(): bool
    {
        return $this->isWarehouseGivesFreights;
    }

    /**
     * В актуальной версии протокола не используется. Для определения доступных операций используйте массив `"kindsOfTransportation": []` и ограничения по габаритам
     */
    public function setIsWarehouseGivesFreights(bool $isWarehouseGivesFreights): self
    {
        $this->isWarehouseGivesFreights = $isWarehouseGivesFreights;

        return $this;
    }

    /**
     * Максимальный габарит грузоместа, м.
     */
    public function getMaxDimension(): float
    {
        return $this->maxDimension;
    }

    /**
     * Максимальный габарит грузоместа, м.
     */
    public function setMaxDimension(float $maxDimension): self
    {
        $this->maxDimension = $maxDimension;

        return $this;
    }

    /**
     * Максимально допустимый объем груза, м.куб.
     */
    public function getMaxVolume(): float
    {
        return $this->maxVolume;
    }

    /**
     * Максимально допустимый объем груза, м.куб.
     */
    public function setMaxVolume(float $maxVolume): self
    {
        $this->maxVolume = $maxVolume;

        return $this;
    }

    /**
     * Максимально допустимый вес груза, кг.
     */
    public function getMaxWeight(): float
    {
        return $this->maxWeight;
    }

    /**
     * Максимально допустимый вес груза, кг.
     */
    public function setMaxWeight(float $maxWeight): self
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    /**
     * Максимально допустимый вес грузоместа, кг.
     */
    public function getMaxWeightPerPlace(): float
    {
        return $this->maxWeightPerPlace;
    }

    /**
     * Максимально допустимый вес грузоместа, кг.
     */
    public function setMaxWeightPerPlace(float $maxWeightPerPlace): self
    {
        $this->maxWeightPerPlace = $maxWeightPerPlace;

        return $this;
    }

    /**
     * Наименование склада.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Наименование склада.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Подробное описание, как добраться до отделения.
     */
    public function getPointerDescription(): string
    {
        return $this->pointerDescription;
    }

    /**
     * Подробное описание, как добраться до отделения.
     */
    public function setPointerDescription(string $pointerDescription): self
    {
        $this->pointerDescription = $pointerDescription;

        return $this;
    }

    /**
     * Выходные и праздничные дни.
     *
     * @return string[]
     */
    public function getScheduleHolidayDays(): array
    {
        return $this->scheduleHolidayDays;
    }

    /**
     * Выходные и праздничные дни.
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
     * Телефон.
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * Телефон.
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется.
     *
     * @return mixed[]
     */
    public function getTimeOfWork(): array
    {
        return $this->timeOfWork;
    }

    /**
     * В актуальной версии протокола не используется.
     *
     * @param mixed[] $timeOfWork
     */
    public function setTimeOfWork(array $timeOfWork): self
    {
        $this->timeOfWork = $timeOfWork;

        return $this;
    }

    /**
     * Буквенный уникальный код склада.
     */
    public function getWarehouseCode(): string
    {
        return $this->warehouseCode;
    }

    /**
     * Буквенный уникальный код склада.
     */
    public function setWarehouseCode(string $warehouseCode): self
    {
        $this->warehouseCode = $warehouseCode;

        return $this;
    }
}
