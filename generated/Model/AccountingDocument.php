<?php

namespace glook\PecomSdk\Generated\Model;

class AccountingDocument
{
    /**
     * Дата документа.
     *
     * @var null|string
     */
    protected $date;

    /**
     * Номер документа.
     *
     * @var null|string
     */
    protected $number;

    /**
     * Ставка НДС
     *
     * @var null|string
     */
    protected $rateVAT;

    /**
     * Список услуг, оказанных в рамках документа. если услуг по документу нет, равно null.
     *
     * @var null|AccountingDocumentService[]
     */
    protected $services;

    /**
     * Сумма с НДС, руб.
     *
     * @var null|float
     */
    protected $sum;

    /**
     * Сумма НДС, руб.
     *
     * @var null|float
     */
    protected $sumVAT;

    /**
     * Вид документа.
     *
     * @var null|string
     */
    protected $type;

    /**
     * Дата документа.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Дата документа.
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Номер документа.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Номер документа.
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Ставка НДС
     */
    public function getRateVAT(): ?string
    {
        return $this->rateVAT;
    }

    /**
     * Ставка НДС
     */
    public function setRateVAT(?string $rateVAT): self
    {
        $this->rateVAT = $rateVAT;

        return $this;
    }

    /**
     * Список услуг, оказанных в рамках документа. если услуг по документу нет, равно null.
     *
     * @return null|AccountingDocumentService[]
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * Список услуг, оказанных в рамках документа. если услуг по документу нет, равно null.
     *
     * @param null|AccountingDocumentService[] $services
     */
    public function setServices(?array $services): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Сумма с НДС, руб.
     */
    public function getSum(): ?float
    {
        return $this->sum;
    }

    /**
     * Сумма с НДС, руб.
     */
    public function setSum(?float $sum): self
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * Сумма НДС, руб.
     */
    public function getSumVAT(): ?float
    {
        return $this->sumVAT;
    }

    /**
     * Сумма НДС, руб.
     */
    public function setSumVAT(?float $sumVAT): self
    {
        $this->sumVAT = $sumVAT;

        return $this;
    }

    /**
     * Вид документа.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Вид документа.
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
