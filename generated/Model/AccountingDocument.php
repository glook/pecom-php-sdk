<?php

namespace glook\PecomSdk\Generated\Model;

class AccountingDocument
{
    /**
     * Дата документа
     *
     * @var string|null
     */
    protected $date;
    /**
     * Номер документа
     *
     * @var string|null
     */
    protected $number;
    /**
     * Ставка НДС
     *
     * @var string|null
     */
    protected $rateVAT;
    /**
     * Список услуг, оказанных в рамках документа. если услуг по документу нет, равно null
     *
     * @var AccountingDocumentService[]|null
     */
    protected $services;
    /**
     * Сумма с НДС, руб.
     *
     * @var float|null
     */
    protected $sum;
    /**
     * Сумма НДС, руб.
     *
     * @var float|null
     */
    protected $sumVAT;
    /**
     * Вид документа
     *
     * @var string|null
     */
    protected $type;
    /**
     * Дата документа
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * Дата документа
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Номер документа
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * Номер документа
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * Ставка НДС
     *
     * @return string|null
     */
    public function getRateVAT() : ?string
    {
        return $this->rateVAT;
    }
    /**
     * Ставка НДС
     *
     * @param string|null $rateVAT
     *
     * @return self
     */
    public function setRateVAT(?string $rateVAT) : self
    {
        $this->rateVAT = $rateVAT;
        return $this;
    }
    /**
     * Список услуг, оказанных в рамках документа. если услуг по документу нет, равно null
     *
     * @return AccountingDocumentService[]|null
     */
    public function getServices() : ?array
    {
        return $this->services;
    }
    /**
     * Список услуг, оказанных в рамках документа. если услуг по документу нет, равно null
     *
     * @param AccountingDocumentService[]|null $services
     *
     * @return self
     */
    public function setServices(?array $services) : self
    {
        $this->services = $services;
        return $this;
    }
    /**
     * Сумма с НДС, руб.
     *
     * @return float|null
     */
    public function getSum() : ?float
    {
        return $this->sum;
    }
    /**
     * Сумма с НДС, руб.
     *
     * @param float|null $sum
     *
     * @return self
     */
    public function setSum(?float $sum) : self
    {
        $this->sum = $sum;
        return $this;
    }
    /**
     * Сумма НДС, руб.
     *
     * @return float|null
     */
    public function getSumVAT() : ?float
    {
        return $this->sumVAT;
    }
    /**
     * Сумма НДС, руб.
     *
     * @param float|null $sumVAT
     *
     * @return self
     */
    public function setSumVAT(?float $sumVAT) : self
    {
        $this->sumVAT = $sumVAT;
        return $this;
    }
    /**
     * Вид документа
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Вид документа
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}