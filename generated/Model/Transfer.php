<?php

namespace glook\PecomSdk\Generated\Model;

class Transfer
{
    /**
     * Общая стоимость услуг по продукту/тарифу, руб.
     *
     * @var float|null
     */
    protected $costTotal;
    /**
     * Текст ошибки по тарифу
     *
     * @var string|null
     */
    protected $errorMessage;
    /**
     * Срок перевозки (календарные дни). На основании заказанных услуг забора/доставки
     *
     * @var float|null
     */
    protected $estDeliveryTime;
    /**
     * Признак ошибок при расчетах по тарифу
     *
     * @var bool|null
     */
    protected $hasError;
    /**
     * Данные по услугам, входящим в продукт/тариф. Перечень услуг, которые будут выставлены в УПД, после перевозки груза с указанными параметрами. Каждый элемент массива и подмассива — отдельная услуга, со своей стоимостью
     *
     * @var CalculatorServiceItem[]|null
     */
    protected $services;
    /**
     * В актуальной версии протокола API не используется
     *
     * @var int|null
     */
    protected $transportingTypes;
    /**
     * Продукт/тариф, для которого выведена стоимость. `type=3` соответствует автоперевозке, `type=1` — авиа.
     *
     * @var int|null
     */
    protected $type;
    /**
     * Общая стоимость услуг по продукту/тарифу, руб.
     *
     * @return float|null
     */
    public function getCostTotal() : ?float
    {
        return $this->costTotal;
    }
    /**
     * Общая стоимость услуг по продукту/тарифу, руб.
     *
     * @param float|null $costTotal
     *
     * @return self
     */
    public function setCostTotal(?float $costTotal) : self
    {
        $this->costTotal = $costTotal;
        return $this;
    }
    /**
     * Текст ошибки по тарифу
     *
     * @return string|null
     */
    public function getErrorMessage() : ?string
    {
        return $this->errorMessage;
    }
    /**
     * Текст ошибки по тарифу
     *
     * @param string|null $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(?string $errorMessage) : self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Срок перевозки (календарные дни). На основании заказанных услуг забора/доставки
     *
     * @return float|null
     */
    public function getEstDeliveryTime() : ?float
    {
        return $this->estDeliveryTime;
    }
    /**
     * Срок перевозки (календарные дни). На основании заказанных услуг забора/доставки
     *
     * @param float|null $estDeliveryTime
     *
     * @return self
     */
    public function setEstDeliveryTime(?float $estDeliveryTime) : self
    {
        $this->estDeliveryTime = $estDeliveryTime;
        return $this;
    }
    /**
     * Признак ошибок при расчетах по тарифу
     *
     * @return bool|null
     */
    public function getHasError() : ?bool
    {
        return $this->hasError;
    }
    /**
     * Признак ошибок при расчетах по тарифу
     *
     * @param bool|null $hasError
     *
     * @return self
     */
    public function setHasError(?bool $hasError) : self
    {
        $this->hasError = $hasError;
        return $this;
    }
    /**
     * Данные по услугам, входящим в продукт/тариф. Перечень услуг, которые будут выставлены в УПД, после перевозки груза с указанными параметрами. Каждый элемент массива и подмассива — отдельная услуга, со своей стоимостью
     *
     * @return CalculatorServiceItem[]|null
     */
    public function getServices() : ?array
    {
        return $this->services;
    }
    /**
     * Данные по услугам, входящим в продукт/тариф. Перечень услуг, которые будут выставлены в УПД, после перевозки груза с указанными параметрами. Каждый элемент массива и подмассива — отдельная услуга, со своей стоимостью
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
     * В актуальной версии протокола API не используется
     *
     * @return int|null
     */
    public function getTransportingTypes() : ?int
    {
        return $this->transportingTypes;
    }
    /**
     * В актуальной версии протокола API не используется
     *
     * @param int|null $transportingTypes
     *
     * @return self
     */
    public function setTransportingTypes(?int $transportingTypes) : self
    {
        $this->transportingTypes = $transportingTypes;
        return $this;
    }
    /**
     * Продукт/тариф, для которого выведена стоимость. `type=3` соответствует автоперевозке, `type=1` — авиа.
     *
     * @return int|null
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Продукт/тариф, для которого выведена стоимость. `type=3` соответствует автоперевозке, `type=1` — авиа.
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}