<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemCargo
{
    /**
     * Штрих-коды мест груза. Если для груза заданы штрих-коды для заявки, обязательно указать тип используемых штрих-кодов `cargos.common.typeClientBarcode`. Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/)
     *
     * @var string[]|null
     */
    protected $clientPositionsBarcode;
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @var string|null
     */
    protected $customerCorrelation;
    /**
     * Описание груза. Поле обязательно для всех грузов если не заполнено общее описание для заявки (`common.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @var string|null
     */
    protected $description;
    /**
     * Высота, м
     *
     * @var float|null
     */
    protected $height;
    /**
     * Длина, м
     *
     * @var float|null
     */
    protected $length;
    /**
     * Номер заказа клиента
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * Количество мест
     *
     * @var int|null
     */
    protected $positionsCount;
    /**
     * Идентификатор продукта/тарифа ПЭК с которым должно работать отделение. ВАЖНО! Данный метод поддерживает только 2 продукта: `type = 3` «ПЭК:LTL Авто» и `type = 1` «ПЭК:Express Авиа»
     *
     * @var int
     */
    protected $type;
    /**
     * Объём, м³
     *
     * @var float|null
     */
    protected $volume;
    /**
     * Вес, кг
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Ширина, м
     *
     * @var float|null
     */
    protected $width;
    /**
     * Штрих-коды мест груза. Если для груза заданы штрих-коды для заявки, обязательно указать тип используемых штрих-кодов `cargos.common.typeClientBarcode`. Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/)
     *
     * @return string[]|null
     */
    public function getClientPositionsBarcode() : ?array
    {
        return $this->clientPositionsBarcode;
    }
    /**
     * Штрих-коды мест груза. Если для груза заданы штрих-коды для заявки, обязательно указать тип используемых штрих-кодов `cargos.common.typeClientBarcode`. Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/)
     *
     * @param string[]|null $clientPositionsBarcode
     *
     * @return self
     */
    public function setClientPositionsBarcode(?array $clientPositionsBarcode) : self
    {
        $this->clientPositionsBarcode = $clientPositionsBarcode;
        return $this;
    }
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @return string|null
     */
    public function getCustomerCorrelation() : ?string
    {
        return $this->customerCorrelation;
    }
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @param string|null $customerCorrelation
     *
     * @return self
     */
    public function setCustomerCorrelation(?string $customerCorrelation) : self
    {
        $this->customerCorrelation = $customerCorrelation;
        return $this;
    }
    /**
     * Описание груза. Поле обязательно для всех грузов если не заполнено общее описание для заявки (`common.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Описание груза. Поле обязательно для всех грузов если не заполнено общее описание для заявки (`common.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Высота, м
     *
     * @return float|null
     */
    public function getHeight() : ?float
    {
        return $this->height;
    }
    /**
     * Высота, м
     *
     * @param float|null $height
     *
     * @return self
     */
    public function setHeight(?float $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Длина, м
     *
     * @return float|null
     */
    public function getLength() : ?float
    {
        return $this->length;
    }
    /**
     * Длина, м
     *
     * @param float|null $length
     *
     * @return self
     */
    public function setLength(?float $length) : self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * Номер заказа клиента
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Номер заказа клиента
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * Количество мест
     *
     * @return int|null
     */
    public function getPositionsCount() : ?int
    {
        return $this->positionsCount;
    }
    /**
     * Количество мест
     *
     * @param int|null $positionsCount
     *
     * @return self
     */
    public function setPositionsCount(?int $positionsCount) : self
    {
        $this->positionsCount = $positionsCount;
        return $this;
    }
    /**
     * Идентификатор продукта/тарифа ПЭК с которым должно работать отделение. ВАЖНО! Данный метод поддерживает только 2 продукта: `type = 3` «ПЭК:LTL Авто» и `type = 1` «ПЭК:Express Авиа»
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Идентификатор продукта/тарифа ПЭК с которым должно работать отделение. ВАЖНО! Данный метод поддерживает только 2 продукта: `type = 3` «ПЭК:LTL Авто» и `type = 1` «ПЭК:Express Авиа»
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Объём, м³
     *
     * @return float|null
     */
    public function getVolume() : ?float
    {
        return $this->volume;
    }
    /**
     * Объём, м³
     *
     * @param float|null $volume
     *
     * @return self
     */
    public function setVolume(?float $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * Вес, кг
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Вес, кг
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Ширина, м
     *
     * @return float|null
     */
    public function getWidth() : ?float
    {
        return $this->width;
    }
    /**
     * Ширина, м
     *
     * @param float|null $width
     *
     * @return self
     */
    public function setWidth(?float $width) : self
    {
        $this->width = $width;
        return $this;
    }
}