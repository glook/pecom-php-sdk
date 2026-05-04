<?php

namespace glook\PecomSdk\Generated\Model;

class CalculatePriceResponse
{
    /**
     * Наименование филиала получения. Отвечает за оказание услуги «последняя миля». При выдаче в отделении выводится филиал по организационной структуре
     *
     * @var string|null
     */
    protected $branchReceiver;
    /**
     * Идентификатор филиала получения
     *
     * @var string|null
     */
    protected $branchReceiverUID;
    /**
     * Наименование филиала отправления. Отвечает за оказание услуги «первая миля». При сдаче в отделении выводится филиал по организационной структуре
     *
     * @var string|null
     */
    protected $branchSender;
    /**
     * Идентификатор филиала отправления
     *
     * @var string|null
     */
    protected $branchSenderUID;
    /**
     * Общие данные по срокам перевозок.
     *
     * @var CommonTerm[]|null
     */
    protected $commonTerms;
    /**
     * Код валюты, в которой выполнен расчет стоимости
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Текст ошибки
     *
     * @var string|null
     */
    protected $errorMessage;
    /**
     * Признак ошибок при расчетах
     *
     * @var bool|null
     */
    protected $hasError;
    /**
     * Результаты расчетов по каждому из запрошенных продуктов/тарифов
     *
     * @var Transfer[]|null
     */
    protected $transfers;
    /**
     * Массив данных по времени приемки груза. Используется для точного определения сроков перевозки. Значения времени, до которого ожидается, что груз будет сдан на склад. Из соответствующего элемента массива `transporting` или `transportingWithDelivery` нужно взять значение сроков перевозки
     *
     * @var string[]|null
     */
    protected $transportingTimes;
    /**
     * Наименование филиала получения. Отвечает за оказание услуги «последняя миля». При выдаче в отделении выводится филиал по организационной структуре
     *
     * @return string|null
     */
    public function getBranchReceiver() : ?string
    {
        return $this->branchReceiver;
    }
    /**
     * Наименование филиала получения. Отвечает за оказание услуги «последняя миля». При выдаче в отделении выводится филиал по организационной структуре
     *
     * @param string|null $branchReceiver
     *
     * @return self
     */
    public function setBranchReceiver(?string $branchReceiver) : self
    {
        $this->branchReceiver = $branchReceiver;
        return $this;
    }
    /**
     * Идентификатор филиала получения
     *
     * @return string|null
     */
    public function getBranchReceiverUID() : ?string
    {
        return $this->branchReceiverUID;
    }
    /**
     * Идентификатор филиала получения
     *
     * @param string|null $branchReceiverUID
     *
     * @return self
     */
    public function setBranchReceiverUID(?string $branchReceiverUID) : self
    {
        $this->branchReceiverUID = $branchReceiverUID;
        return $this;
    }
    /**
     * Наименование филиала отправления. Отвечает за оказание услуги «первая миля». При сдаче в отделении выводится филиал по организационной структуре
     *
     * @return string|null
     */
    public function getBranchSender() : ?string
    {
        return $this->branchSender;
    }
    /**
     * Наименование филиала отправления. Отвечает за оказание услуги «первая миля». При сдаче в отделении выводится филиал по организационной структуре
     *
     * @param string|null $branchSender
     *
     * @return self
     */
    public function setBranchSender(?string $branchSender) : self
    {
        $this->branchSender = $branchSender;
        return $this;
    }
    /**
     * Идентификатор филиала отправления
     *
     * @return string|null
     */
    public function getBranchSenderUID() : ?string
    {
        return $this->branchSenderUID;
    }
    /**
     * Идентификатор филиала отправления
     *
     * @param string|null $branchSenderUID
     *
     * @return self
     */
    public function setBranchSenderUID(?string $branchSenderUID) : self
    {
        $this->branchSenderUID = $branchSenderUID;
        return $this;
    }
    /**
     * Общие данные по срокам перевозок.
     *
     * @return CommonTerm[]|null
     */
    public function getCommonTerms() : ?array
    {
        return $this->commonTerms;
    }
    /**
     * Общие данные по срокам перевозок.
     *
     * @param CommonTerm[]|null $commonTerms
     *
     * @return self
     */
    public function setCommonTerms(?array $commonTerms) : self
    {
        $this->commonTerms = $commonTerms;
        return $this;
    }
    /**
     * Код валюты, в которой выполнен расчет стоимости
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Код валюты, в которой выполнен расчет стоимости
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Текст ошибки
     *
     * @return string|null
     */
    public function getErrorMessage() : ?string
    {
        return $this->errorMessage;
    }
    /**
     * Текст ошибки
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
     * Признак ошибок при расчетах
     *
     * @return bool|null
     */
    public function getHasError() : ?bool
    {
        return $this->hasError;
    }
    /**
     * Признак ошибок при расчетах
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
     * Результаты расчетов по каждому из запрошенных продуктов/тарифов
     *
     * @return Transfer[]|null
     */
    public function getTransfers() : ?array
    {
        return $this->transfers;
    }
    /**
     * Результаты расчетов по каждому из запрошенных продуктов/тарифов
     *
     * @param Transfer[]|null $transfers
     *
     * @return self
     */
    public function setTransfers(?array $transfers) : self
    {
        $this->transfers = $transfers;
        return $this;
    }
    /**
     * Массив данных по времени приемки груза. Используется для точного определения сроков перевозки. Значения времени, до которого ожидается, что груз будет сдан на склад. Из соответствующего элемента массива `transporting` или `transportingWithDelivery` нужно взять значение сроков перевозки
     *
     * @return string[]|null
     */
    public function getTransportingTimes() : ?array
    {
        return $this->transportingTimes;
    }
    /**
     * Массив данных по времени приемки груза. Используется для точного определения сроков перевозки. Значения времени, до которого ожидается, что груз будет сдан на склад. Из соответствующего элемента массива `transporting` или `transportingWithDelivery` нужно взять значение сроков перевозки
     *
     * @param string[]|null $transportingTimes
     *
     * @return self
     */
    public function setTransportingTimes(?array $transportingTimes) : self
    {
        $this->transportingTimes = $transportingTimes;
        return $this;
    }
}