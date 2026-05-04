<?php

namespace glook\PecomSdk\Generated\Model;

class AccountingDocumentService
{
    /**
     * Код груза
     *
     * @var string|null
     */
    protected $cargoCode;
    /**
     * Ставка НДС
     *
     * @var string|null
     */
    protected $rateVAT;
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
     * Вид услуги
     *
     * @var string|null
     */
    protected $type;
    /**
     * Код груза
     *
     * @return string|null
     */
    public function getCargoCode() : ?string
    {
        return $this->cargoCode;
    }
    /**
     * Код груза
     *
     * @param string|null $cargoCode
     *
     * @return self
     */
    public function setCargoCode(?string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
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
     * Вид услуги
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Вид услуги
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