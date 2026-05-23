<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupCommon
{
    /**
     * Позволять перестановку габаритов с целью преодоления ограничений длины/ширины/высоты.
     *
     * @var null|bool
     */
    protected $adjustDimensions;

    /**
     * Планируемая дата забора груза.
     *
     * @var \DateTime
     */
    protected $applicationDate;

    /**
     * Звонить отправителю для подтверждения заявки. По умолчанию true. Признак необходимости звонка отправителю для согласования/уточнения деталей Забора груза до планирования машины. true — оператор будет звонить для согласования, false — оператор не будет звонить. Машина будет запланирована автоматически.
     *
     * @var null|bool
     */
    protected $callToScheduleCar;

    /**
     * Массив с габаритами каждого грузоместа клиента. Имеет смысл при подключенной услуге «Доверительная приемка». Для продукта EasyWay (`type` 12) услуга подключена по умолчанию. Если габариты не будут заполнены, услуга «Доверительная приемка» не будет оказана.
     *
     * @var null|CargopickupCargoPlace[]
     */
    protected $cargoPlaceList;

    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге «Приемка по штрих-кодам клиента» и для продукта EasyWay (`type` 12).
     *
     * @var null|string[]
     */
    protected $clientPositionsBarcode;

    /**
     * Произвольное значение для синхронизации на стороне клиента.
     *
     * @var null|string
     */
    protected $customerCorrelation;

    /**
     * Общее название перевозимых грузов. Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/).
     *
     * @var string
     */
    protected $description;

    /**
     * Примерная наибольшая высота из всех мест, м
     *
     * @var float
     */
    protected $height;

    /**
     * Хрупкий груз.
     *
     * @var null|bool
     */
    protected $isFragile;

    /**
     * Стекло.
     *
     * @var null|bool
     */
    protected $isGlass;

    /**
     * Жидкость.
     *
     * @var null|bool
     */
    protected $isLiquid;

    /**
     * Необходима открытая машина.
     *
     * @var bool
     */
    protected $isOpenCar;

    /**
     * Необходима боковая погрузка.
     *
     * @var bool
     */
    protected $isSideLoad;

    /**
     * Необходима машина со специальным оборудованием. Если не указано, считается равным false.
     *
     * @var null|bool
     */
    protected $isSpecialEquipment;

    /**
     * Необходима растентовка. Если не указано, считается равным false.
     *
     * @var null|bool
     */
    protected $isUncovered;

    /**
     * Примерная наибольшая длина из всех мест, м
     *
     * @var float
     */
    protected $length;

    /**
     * Тип заявки на забор. 1 — Заказ «На машину и перевозку (разовый забор)» (по умолчанию), 3 — Признак подачи заказа машины, 4 — Заказ «На перевозку (с отдельным Заказом на машину)».
     *
     * @var null|int
     */
    protected $pickupType;

    /**
     * Количество мест, шт
     *
     * @var int
     */
    protected $positionsCount;

    /**
     * ФИО ответственного за оформление заявки.
     *
     * @var string
     */
    protected $responsiblePerson;

    /**
     * Идентификатор продукта/тарифа. Возможные значения: 3 — LTL (сборный груз), 12 — EasyWay, 5 — Express Автоперевозка, 1 — Express Авиаперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/).
     *
     * @var int
     */
    protected $type;

    /**
     * Тип Ваших штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/preregistration/POST/preregistration/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра.
     *
     * @var null|string
     */
    protected $typeClientBarcode;

    /**
     * Объём груза, м3.
     *
     * @var float
     */
    protected $volume;

    /**
     * Вес груза, кг.
     *
     * @var float
     */
    protected $weight;

    /**
     * Представитель какой стороны оформляет заявки (1 — отправитель, 2 — получатель, 3 — третье лицо).
     *
     * @var int
     */
    protected $whoRegisterApplication;

    /**
     * Примерная наибольшая ширина из всех мест, м
     *
     * @var float
     */
    protected $width;

    /**
     * Позволять перестановку габаритов с целью преодоления ограничений длины/ширины/высоты.
     */
    public function getAdjustDimensions(): ?bool
    {
        return $this->adjustDimensions;
    }

    /**
     * Позволять перестановку габаритов с целью преодоления ограничений длины/ширины/высоты.
     */
    public function setAdjustDimensions(?bool $adjustDimensions): self
    {
        $this->adjustDimensions = $adjustDimensions;

        return $this;
    }

    /**
     * Планируемая дата забора груза.
     */
    public function getApplicationDate(): \DateTime
    {
        return $this->applicationDate;
    }

    /**
     * Планируемая дата забора груза.
     */
    public function setApplicationDate(\DateTime $applicationDate): self
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    /**
     * Звонить отправителю для подтверждения заявки. По умолчанию true. Признак необходимости звонка отправителю для согласования/уточнения деталей Забора груза до планирования машины. true — оператор будет звонить для согласования, false — оператор не будет звонить. Машина будет запланирована автоматически.
     */
    public function getCallToScheduleCar(): ?bool
    {
        return $this->callToScheduleCar;
    }

    /**
     * Звонить отправителю для подтверждения заявки. По умолчанию true. Признак необходимости звонка отправителю для согласования/уточнения деталей Забора груза до планирования машины. true — оператор будет звонить для согласования, false — оператор не будет звонить. Машина будет запланирована автоматически.
     */
    public function setCallToScheduleCar(?bool $callToScheduleCar): self
    {
        $this->callToScheduleCar = $callToScheduleCar;

        return $this;
    }

    /**
     * Массив с габаритами каждого грузоместа клиента. Имеет смысл при подключенной услуге «Доверительная приемка». Для продукта EasyWay (`type` 12) услуга подключена по умолчанию. Если габариты не будут заполнены, услуга «Доверительная приемка» не будет оказана.
     *
     * @return null|CargopickupCargoPlace[]
     */
    public function getCargoPlaceList(): ?array
    {
        return $this->cargoPlaceList;
    }

    /**
     * Массив с габаритами каждого грузоместа клиента. Имеет смысл при подключенной услуге «Доверительная приемка». Для продукта EasyWay (`type` 12) услуга подключена по умолчанию. Если габариты не будут заполнены, услуга «Доверительная приемка» не будет оказана.
     *
     * @param null|CargopickupCargoPlace[] $cargoPlaceList
     */
    public function setCargoPlaceList(?array $cargoPlaceList): self
    {
        $this->cargoPlaceList = $cargoPlaceList;

        return $this;
    }

    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге «Приемка по штрих-кодам клиента» и для продукта EasyWay (`type` 12).
     *
     * @return null|string[]
     */
    public function getClientPositionsBarcode(): ?array
    {
        return $this->clientPositionsBarcode;
    }

    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге «Приемка по штрих-кодам клиента» и для продукта EasyWay (`type` 12).
     *
     * @param null|string[] $clientPositionsBarcode
     */
    public function setClientPositionsBarcode(?array $clientPositionsBarcode): self
    {
        $this->clientPositionsBarcode = $clientPositionsBarcode;

        return $this;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента.
     */
    public function getCustomerCorrelation(): ?string
    {
        return $this->customerCorrelation;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента.
     */
    public function setCustomerCorrelation(?string $customerCorrelation): self
    {
        $this->customerCorrelation = $customerCorrelation;

        return $this;
    }

    /**
     * Общее название перевозимых грузов. Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/).
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Общее название перевозимых грузов. Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/).
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Примерная наибольшая высота из всех мест, м
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * Примерная наибольшая высота из всех мест, м
     */
    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Хрупкий груз.
     */
    public function getIsFragile(): ?bool
    {
        return $this->isFragile;
    }

    /**
     * Хрупкий груз.
     */
    public function setIsFragile(?bool $isFragile): self
    {
        $this->isFragile = $isFragile;

        return $this;
    }

    /**
     * Стекло.
     */
    public function getIsGlass(): ?bool
    {
        return $this->isGlass;
    }

    /**
     * Стекло.
     */
    public function setIsGlass(?bool $isGlass): self
    {
        $this->isGlass = $isGlass;

        return $this;
    }

    /**
     * Жидкость.
     */
    public function getIsLiquid(): ?bool
    {
        return $this->isLiquid;
    }

    /**
     * Жидкость.
     */
    public function setIsLiquid(?bool $isLiquid): self
    {
        $this->isLiquid = $isLiquid;

        return $this;
    }

    /**
     * Необходима открытая машина.
     */
    public function getIsOpenCar(): bool
    {
        return $this->isOpenCar;
    }

    /**
     * Необходима открытая машина.
     */
    public function setIsOpenCar(bool $isOpenCar): self
    {
        $this->isOpenCar = $isOpenCar;

        return $this;
    }

    /**
     * Необходима боковая погрузка.
     */
    public function getIsSideLoad(): bool
    {
        return $this->isSideLoad;
    }

    /**
     * Необходима боковая погрузка.
     */
    public function setIsSideLoad(bool $isSideLoad): self
    {
        $this->isSideLoad = $isSideLoad;

        return $this;
    }

    /**
     * Необходима машина со специальным оборудованием. Если не указано, считается равным false.
     */
    public function getIsSpecialEquipment(): ?bool
    {
        return $this->isSpecialEquipment;
    }

    /**
     * Необходима машина со специальным оборудованием. Если не указано, считается равным false.
     */
    public function setIsSpecialEquipment(?bool $isSpecialEquipment): self
    {
        $this->isSpecialEquipment = $isSpecialEquipment;

        return $this;
    }

    /**
     * Необходима растентовка. Если не указано, считается равным false.
     */
    public function getIsUncovered(): ?bool
    {
        return $this->isUncovered;
    }

    /**
     * Необходима растентовка. Если не указано, считается равным false.
     */
    public function setIsUncovered(?bool $isUncovered): self
    {
        $this->isUncovered = $isUncovered;

        return $this;
    }

    /**
     * Примерная наибольшая длина из всех мест, м
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Примерная наибольшая длина из всех мест, м
     */
    public function setLength(float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Тип заявки на забор. 1 — Заказ «На машину и перевозку (разовый забор)» (по умолчанию), 3 — Признак подачи заказа машины, 4 — Заказ «На перевозку (с отдельным Заказом на машину)».
     */
    public function getPickupType(): ?int
    {
        return $this->pickupType;
    }

    /**
     * Тип заявки на забор. 1 — Заказ «На машину и перевозку (разовый забор)» (по умолчанию), 3 — Признак подачи заказа машины, 4 — Заказ «На перевозку (с отдельным Заказом на машину)».
     */
    public function setPickupType(?int $pickupType): self
    {
        $this->pickupType = $pickupType;

        return $this;
    }

    /**
     * Количество мест, шт
     */
    public function getPositionsCount(): int
    {
        return $this->positionsCount;
    }

    /**
     * Количество мест, шт
     */
    public function setPositionsCount(int $positionsCount): self
    {
        $this->positionsCount = $positionsCount;

        return $this;
    }

    /**
     * ФИО ответственного за оформление заявки.
     */
    public function getResponsiblePerson(): string
    {
        return $this->responsiblePerson;
    }

    /**
     * ФИО ответственного за оформление заявки.
     */
    public function setResponsiblePerson(string $responsiblePerson): self
    {
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Идентификатор продукта/тарифа. Возможные значения: 3 — LTL (сборный груз), 12 — EasyWay, 5 — Express Автоперевозка, 1 — Express Авиаперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/).
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Идентификатор продукта/тарифа. Возможные значения: 3 — LTL (сборный груз), 12 — EasyWay, 5 — Express Автоперевозка, 1 — Express Авиаперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/).
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Тип Ваших штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/preregistration/POST/preregistration/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра.
     */
    public function getTypeClientBarcode(): ?string
    {
        return $this->typeClientBarcode;
    }

    /**
     * Тип Ваших штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/preregistration/POST/preregistration/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра.
     */
    public function setTypeClientBarcode(?string $typeClientBarcode): self
    {
        $this->typeClientBarcode = $typeClientBarcode;

        return $this;
    }

    /**
     * Объём груза, м3.
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * Объём груза, м3.
     */
    public function setVolume(float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Вес груза, кг.
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Вес груза, кг.
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Представитель какой стороны оформляет заявки (1 — отправитель, 2 — получатель, 3 — третье лицо).
     */
    public function getWhoRegisterApplication(): int
    {
        return $this->whoRegisterApplication;
    }

    /**
     * Представитель какой стороны оформляет заявки (1 — отправитель, 2 — получатель, 3 — третье лицо).
     */
    public function setWhoRegisterApplication(int $whoRegisterApplication): self
    {
        $this->whoRegisterApplication = $whoRegisterApplication;

        return $this;
    }

    /**
     * Примерная наибольшая ширина из всех мест, м
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Примерная наибольшая ширина из всех мест, м
     */
    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
