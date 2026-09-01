<?php

namespace glook\PecomSdk\Generated\Model;

class AccountingDocumentService
{
    /**
     * Код груза
     *
     * @var null|string
     */
    protected $cargoCode;

    /**
     * Ставка НДС
     *
     * @var null|string
     */
    protected $rateVAT;

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
     * Вид услуги
     *
     * @var null|string
     */
    protected $type;

    /**
     * Код груза
     */
    public function getCargoCode(): ?string
    {
        return $this->cargoCode;
    }

    /**
     * Код груза
     */
    public function setCargoCode(?string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

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
     * Вид услуги
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Вид услуги
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
