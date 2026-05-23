<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemCargo
{
    /**
     * Штрих-коды мест груза. Если для груза заданы штрих-коды для заявки, обязательно указать тип используемых штрих-кодов `cargos.common.typeClientBarcode`. Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/).
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
     * Описание груза. Поле обязательно для всех грузов если не заполнено общее описание для заявки (`common.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/).
     *
     * @var null|string
     */
    protected $description;

    /**
     * Высота, м
     *
     * @var null|float
     */
    protected $height;

    /**
     * Длина, м
     *
     * @var null|float
     */
    protected $length;

    /**
     * Номер заказа клиента.
     *
     * @var null|string
     */
    protected $orderNumber;

    /**
     * Количество мест
     *
     * @var null|int
     */
    protected $positionsCount;

    /**
     * Идентификатор продукта/тарифа ПЭК с которым должно работать отделение. ВАЖНО! Данный метод поддерживает только 2 продукта: `type = 3` «ПЭК:LTL Авто» и `type = 1` «ПЭК:Express Авиа».
     *
     * @var int
     */
    protected $type;

    /**
     * Объём, м³.
     *
     * @var null|float
     */
    protected $volume;

    /**
     * Вес, кг.
     *
     * @var null|float
     */
    protected $weight;

    /**
     * Ширина, м
     *
     * @var null|float
     */
    protected $width;

    /**
     * Штрих-коды мест груза. Если для груза заданы штрих-коды для заявки, обязательно указать тип используемых штрих-кодов `cargos.common.typeClientBarcode`. Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/).
     *
     * @return null|string[]
     */
    public function getClientPositionsBarcode(): ?array
    {
        return $this->clientPositionsBarcode;
    }

    /**
     * Штрих-коды мест груза. Если для груза заданы штрих-коды для заявки, обязательно указать тип используемых штрих-кодов `cargos.common.typeClientBarcode`. Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/).
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
     * Описание груза. Поле обязательно для всех грузов если не заполнено общее описание для заявки (`common.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/).
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Описание груза. Поле обязательно для всех грузов если не заполнено общее описание для заявки (`common.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/).
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Высота, м
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * Высота, м
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Длина, м
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * Длина, м
     */
    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Номер заказа клиента.
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Номер заказа клиента.
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Количество мест
     */
    public function getPositionsCount(): ?int
    {
        return $this->positionsCount;
    }

    /**
     * Количество мест
     */
    public function setPositionsCount(?int $positionsCount): self
    {
        $this->positionsCount = $positionsCount;

        return $this;
    }

    /**
     * Идентификатор продукта/тарифа ПЭК с которым должно работать отделение. ВАЖНО! Данный метод поддерживает только 2 продукта: `type = 3` «ПЭК:LTL Авто» и `type = 1` «ПЭК:Express Авиа».
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Идентификатор продукта/тарифа ПЭК с которым должно работать отделение. ВАЖНО! Данный метод поддерживает только 2 продукта: `type = 3` «ПЭК:LTL Авто» и `type = 1` «ПЭК:Express Авиа».
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Объём, м³.
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Объём, м³.
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Вес, кг.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Вес, кг.
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Ширина, м
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * Ширина, м
     */
    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
