<?php

namespace glook\PecomSdk\Generated\Model;

class CalculatorServiceItem
{
    /**
     * Сумма за услугу, руб. Стоимость основной услуги (не включает стоимости подуслуг из вложенного массива `services`)
     *
     * @var null|float
     */
    protected $cost;

    /**
     * Наименование конкретной услуги
     *
     * @var null|string
     */
    protected $info;

    /**
     * Признак страхования сроков перевозки. Поле встречается только у услуги страхования.
     *
     * @var null|bool
     */
    protected $insuranceTerm;

    /**
     * Город отправителя
     *
     * @var null|string
     */
    protected $senderCity;

    /**
     * Массив отдельно выделяемых услуг со стоимостью. Стоимость услуг из массива НЕ ВХОДИТ в стоимость (реквизит Cost) родительского элемента
     *
     * @var null|CalculatorServiceItem[]
     */
    protected $services;

    /**
     * Наименование группы услуги
     *
     * @var null|string
     */
    protected $serviceType;

    /**
     * Сумма за услугу, руб. Стоимость основной услуги (не включает стоимости подуслуг из вложенного массива `services`)
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * Сумма за услугу, руб. Стоимость основной услуги (не включает стоимости подуслуг из вложенного массива `services`)
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Наименование конкретной услуги
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * Наименование конкретной услуги
     */
    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Признак страхования сроков перевозки. Поле встречается только у услуги страхования.
     */
    public function getInsuranceTerm(): ?bool
    {
        return $this->insuranceTerm;
    }

    /**
     * Признак страхования сроков перевозки. Поле встречается только у услуги страхования.
     */
    public function setInsuranceTerm(?bool $insuranceTerm): self
    {
        $this->insuranceTerm = $insuranceTerm;

        return $this;
    }

    /**
     * Город отправителя
     */
    public function getSenderCity(): ?string
    {
        return $this->senderCity;
    }

    /**
     * Город отправителя
     */
    public function setSenderCity(?string $senderCity): self
    {
        $this->senderCity = $senderCity;

        return $this;
    }

    /**
     * Массив отдельно выделяемых услуг со стоимостью. Стоимость услуг из массива НЕ ВХОДИТ в стоимость (реквизит Cost) родительского элемента
     *
     * @return null|CalculatorServiceItem[]
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * Массив отдельно выделяемых услуг со стоимостью. Стоимость услуг из массива НЕ ВХОДИТ в стоимость (реквизит Cost) родительского элемента
     *
     * @param null|CalculatorServiceItem[] $services
     */
    public function setServices(?array $services): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Наименование группы услуги
     */
    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    /**
     * Наименование группы услуги
     */
    public function setServiceType(?string $serviceType): self
    {
        $this->serviceType = $serviceType;

        return $this;
    }
}
