<?php

namespace glook\PecomSdk\Generated\Model;

class CalculatorServiceItem
{
    /**
     * Сумма за услугу, руб. Стоимость основной услуги (не включает стоимости подуслуг из вложенного массива `services`)
     *
     * @var float|null
     */
    protected $cost;
    /**
     * Наименование конкретной услуги
     *
     * @var string|null
     */
    protected $info;
    /**
     * Признак страхования сроков перевозки. Поле встречается только у услуги страхования.
     *
     * @var bool|null
     */
    protected $insuranceTerm;
    /**
     * Город отправителя
     *
     * @var string|null
     */
    protected $senderCity;
    /**
     * Массив отдельно выделяемых услуг со стоимостью. Стоимость услуг из массива НЕ ВХОДИТ в стоимость (реквизит Cost) родительского элемента
     *
     * @var CalculatorServiceItem[]|null
     */
    protected $services;
    /**
     * Наименование группы услуги
     *
     * @var string|null
     */
    protected $serviceType;
    /**
     * Сумма за услугу, руб. Стоимость основной услуги (не включает стоимости подуслуг из вложенного массива `services`)
     *
     * @return float|null
     */
    public function getCost() : ?float
    {
        return $this->cost;
    }
    /**
     * Сумма за услугу, руб. Стоимость основной услуги (не включает стоимости подуслуг из вложенного массива `services`)
     *
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost) : self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     * Наименование конкретной услуги
     *
     * @return string|null
     */
    public function getInfo() : ?string
    {
        return $this->info;
    }
    /**
     * Наименование конкретной услуги
     *
     * @param string|null $info
     *
     * @return self
     */
    public function setInfo(?string $info) : self
    {
        $this->info = $info;
        return $this;
    }
    /**
     * Признак страхования сроков перевозки. Поле встречается только у услуги страхования.
     *
     * @return bool|null
     */
    public function getInsuranceTerm() : ?bool
    {
        return $this->insuranceTerm;
    }
    /**
     * Признак страхования сроков перевозки. Поле встречается только у услуги страхования.
     *
     * @param bool|null $insuranceTerm
     *
     * @return self
     */
    public function setInsuranceTerm(?bool $insuranceTerm) : self
    {
        $this->insuranceTerm = $insuranceTerm;
        return $this;
    }
    /**
     * Город отправителя
     *
     * @return string|null
     */
    public function getSenderCity() : ?string
    {
        return $this->senderCity;
    }
    /**
     * Город отправителя
     *
     * @param string|null $senderCity
     *
     * @return self
     */
    public function setSenderCity(?string $senderCity) : self
    {
        $this->senderCity = $senderCity;
        return $this;
    }
    /**
     * Массив отдельно выделяемых услуг со стоимостью. Стоимость услуг из массива НЕ ВХОДИТ в стоимость (реквизит Cost) родительского элемента
     *
     * @return CalculatorServiceItem[]|null
     */
    public function getServices() : ?array
    {
        return $this->services;
    }
    /**
     * Массив отдельно выделяемых услуг со стоимостью. Стоимость услуг из массива НЕ ВХОДИТ в стоимость (реквизит Cost) родительского элемента
     *
     * @param CalculatorServiceItem[]|null $services
     *
     * @return self
     */
    public function setServices(?array $services) : self
    {
        $this->services = $services;
        return $this;
    }
    /**
     * Наименование группы услуги
     *
     * @return string|null
     */
    public function getServiceType() : ?string
    {
        return $this->serviceType;
    }
    /**
     * Наименование группы услуги
     *
     * @param string|null $serviceType
     *
     * @return self
     */
    public function setServiceType(?string $serviceType) : self
    {
        $this->serviceType = $serviceType;
        return $this;
    }
}