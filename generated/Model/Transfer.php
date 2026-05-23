<?php

namespace glook\PecomSdk\Generated\Model;

class Transfer
{
    /**
     * Общая стоимость услуг по продукту/тарифу, руб.
     *
     * @var null|float
     */
    protected $costTotal;

    /**
     * Текст ошибки по тарифу.
     *
     * @var null|string
     */
    protected $errorMessage;

    /**
     * Срок перевозки (календарные дни). На основании заказанных услуг забора/доставки.
     *
     * @var null|float
     */
    protected $estDeliveryTime;

    /**
     * Признак ошибок при расчетах по тарифу.
     *
     * @var null|bool
     */
    protected $hasError;

    /**
     * Данные по услугам, входящим в продукт/тариф. Перечень услуг, которые будут выставлены в УПД, после перевозки груза с указанными параметрами. Каждый элемент массива и подмассива — отдельная услуга, со своей стоимостью.
     *
     * @var null|CalculatorServiceItem[]
     */
    protected $services;

    /**
     * В актуальной версии протокола API не используется.
     *
     * @var null|int
     */
    protected $transportingTypes;

    /**
     * Продукт/тариф, для которого выведена стоимость. `type=3` соответствует автоперевозке, `type=1` — авиа.
     *
     * @var null|int
     */
    protected $type;

    /**
     * Общая стоимость услуг по продукту/тарифу, руб.
     */
    public function getCostTotal(): ?float
    {
        return $this->costTotal;
    }

    /**
     * Общая стоимость услуг по продукту/тарифу, руб.
     */
    public function setCostTotal(?float $costTotal): self
    {
        $this->costTotal = $costTotal;

        return $this;
    }

    /**
     * Текст ошибки по тарифу.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Текст ошибки по тарифу.
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Срок перевозки (календарные дни). На основании заказанных услуг забора/доставки.
     */
    public function getEstDeliveryTime(): ?float
    {
        return $this->estDeliveryTime;
    }

    /**
     * Срок перевозки (календарные дни). На основании заказанных услуг забора/доставки.
     */
    public function setEstDeliveryTime(?float $estDeliveryTime): self
    {
        $this->estDeliveryTime = $estDeliveryTime;

        return $this;
    }

    /**
     * Признак ошибок при расчетах по тарифу.
     */
    public function getHasError(): ?bool
    {
        return $this->hasError;
    }

    /**
     * Признак ошибок при расчетах по тарифу.
     */
    public function setHasError(?bool $hasError): self
    {
        $this->hasError = $hasError;

        return $this;
    }

    /**
     * Данные по услугам, входящим в продукт/тариф. Перечень услуг, которые будут выставлены в УПД, после перевозки груза с указанными параметрами. Каждый элемент массива и подмассива — отдельная услуга, со своей стоимостью.
     *
     * @return null|CalculatorServiceItem[]
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * Данные по услугам, входящим в продукт/тариф. Перечень услуг, которые будут выставлены в УПД, после перевозки груза с указанными параметрами. Каждый элемент массива и подмассива — отдельная услуга, со своей стоимостью.
     *
     * @param null|CalculatorServiceItem[] $services
     */
    public function setServices(?array $services): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * В актуальной версии протокола API не используется.
     */
    public function getTransportingTypes(): ?int
    {
        return $this->transportingTypes;
    }

    /**
     * В актуальной версии протокола API не используется.
     */
    public function setTransportingTypes(?int $transportingTypes): self
    {
        $this->transportingTypes = $transportingTypes;

        return $this;
    }

    /**
     * Продукт/тариф, для которого выведена стоимость. `type=3` соответствует автоперевозке, `type=1` — авиа.
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * Продукт/тариф, для которого выведена стоимость. `type=3` соответствует автоперевозке, `type=1` — авиа.
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
