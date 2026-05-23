<?php

namespace glook\PecomSdk\Generated\Model;

class CalculatePriceResponse
{
    /**
     * Наименование филиала получения. Отвечает за оказание услуги «последняя миля». При выдаче в отделении выводится филиал по организационной структуре.
     *
     * @var null|string
     */
    protected $branchReceiver;

    /**
     * Идентификатор филиала получения.
     *
     * @var null|string
     */
    protected $branchReceiverUID;

    /**
     * Наименование филиала отправления. Отвечает за оказание услуги «первая миля». При сдаче в отделении выводится филиал по организационной структуре.
     *
     * @var null|string
     */
    protected $branchSender;

    /**
     * Идентификатор филиала отправления.
     *
     * @var null|string
     */
    protected $branchSenderUID;

    /**
     * Общие данные по срокам перевозок.
     *
     * @var null|CommonTerm[]
     */
    protected $commonTerms;

    /**
     * Код валюты, в которой выполнен расчет стоимости.
     *
     * @var null|string
     */
    protected $currencyCode;

    /**
     * Текст ошибки.
     *
     * @var null|string
     */
    protected $errorMessage;

    /**
     * Признак ошибок при расчетах.
     *
     * @var null|bool
     */
    protected $hasError;

    /**
     * Результаты расчетов по каждому из запрошенных продуктов/тарифов.
     *
     * @var null|Transfer[]
     */
    protected $transfers;

    /**
     * Массив данных по времени приемки груза. Используется для точного определения сроков перевозки. Значения времени, до которого ожидается, что груз будет сдан на склад. Из соответствующего элемента массива `transporting` или `transportingWithDelivery` нужно взять значение сроков перевозки.
     *
     * @var null|string[]
     */
    protected $transportingTimes;

    /**
     * Наименование филиала получения. Отвечает за оказание услуги «последняя миля». При выдаче в отделении выводится филиал по организационной структуре.
     */
    public function getBranchReceiver(): ?string
    {
        return $this->branchReceiver;
    }

    /**
     * Наименование филиала получения. Отвечает за оказание услуги «последняя миля». При выдаче в отделении выводится филиал по организационной структуре.
     */
    public function setBranchReceiver(?string $branchReceiver): self
    {
        $this->branchReceiver = $branchReceiver;

        return $this;
    }

    /**
     * Идентификатор филиала получения.
     */
    public function getBranchReceiverUID(): ?string
    {
        return $this->branchReceiverUID;
    }

    /**
     * Идентификатор филиала получения.
     */
    public function setBranchReceiverUID(?string $branchReceiverUID): self
    {
        $this->branchReceiverUID = $branchReceiverUID;

        return $this;
    }

    /**
     * Наименование филиала отправления. Отвечает за оказание услуги «первая миля». При сдаче в отделении выводится филиал по организационной структуре.
     */
    public function getBranchSender(): ?string
    {
        return $this->branchSender;
    }

    /**
     * Наименование филиала отправления. Отвечает за оказание услуги «первая миля». При сдаче в отделении выводится филиал по организационной структуре.
     */
    public function setBranchSender(?string $branchSender): self
    {
        $this->branchSender = $branchSender;

        return $this;
    }

    /**
     * Идентификатор филиала отправления.
     */
    public function getBranchSenderUID(): ?string
    {
        return $this->branchSenderUID;
    }

    /**
     * Идентификатор филиала отправления.
     */
    public function setBranchSenderUID(?string $branchSenderUID): self
    {
        $this->branchSenderUID = $branchSenderUID;

        return $this;
    }

    /**
     * Общие данные по срокам перевозок.
     *
     * @return null|CommonTerm[]
     */
    public function getCommonTerms(): ?array
    {
        return $this->commonTerms;
    }

    /**
     * Общие данные по срокам перевозок.
     *
     * @param null|CommonTerm[] $commonTerms
     */
    public function setCommonTerms(?array $commonTerms): self
    {
        $this->commonTerms = $commonTerms;

        return $this;
    }

    /**
     * Код валюты, в которой выполнен расчет стоимости.
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Код валюты, в которой выполнен расчет стоимости.
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Текст ошибки.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Текст ошибки.
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Признак ошибок при расчетах.
     */
    public function getHasError(): ?bool
    {
        return $this->hasError;
    }

    /**
     * Признак ошибок при расчетах.
     */
    public function setHasError(?bool $hasError): self
    {
        $this->hasError = $hasError;

        return $this;
    }

    /**
     * Результаты расчетов по каждому из запрошенных продуктов/тарифов.
     *
     * @return null|Transfer[]
     */
    public function getTransfers(): ?array
    {
        return $this->transfers;
    }

    /**
     * Результаты расчетов по каждому из запрошенных продуктов/тарифов.
     *
     * @param null|Transfer[] $transfers
     */
    public function setTransfers(?array $transfers): self
    {
        $this->transfers = $transfers;

        return $this;
    }

    /**
     * Массив данных по времени приемки груза. Используется для точного определения сроков перевозки. Значения времени, до которого ожидается, что груз будет сдан на склад. Из соответствующего элемента массива `transporting` или `transportingWithDelivery` нужно взять значение сроков перевозки.
     *
     * @return null|string[]
     */
    public function getTransportingTimes(): ?array
    {
        return $this->transportingTimes;
    }

    /**
     * Массив данных по времени приемки груза. Используется для точного определения сроков перевозки. Значения времени, до которого ожидается, что груз будет сдан на склад. Из соответствующего элемента массива `transporting` или `transportingWithDelivery` нужно взять значение сроков перевозки.
     *
     * @param null|string[] $transportingTimes
     */
    public function setTransportingTimes(?array $transportingTimes): self
    {
        $this->transportingTimes = $transportingTimes;

        return $this;
    }
}
