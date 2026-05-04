<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupSellerService
{
    /**
     * Ставка НДС. Возможные значения: НДС22, НДС10, НДС7, НДС5, БезНДС
     *
     * @var string
     */
    protected $rateVAT;
    /**
     * Сумма услуги с НДС, руб.
     *
     * @var float
     */
    protected $sumIncludingVAT;
    /**
     * Тип дополнительной услуги. 1 — Доставка, 2 — Курьерская доставка, 3 — Доставка и выдача на терминале, 4 — Доставка и выдача на ПВЗ, 5 — Подъем на этаж, 6 — Доставка интернет-магазина, 7 — Погрузо-разгрузочные работы интернет-магазина
     *
     * @var int
     */
    protected $type;
    /**
     * Ставка НДС. Возможные значения: НДС22, НДС10, НДС7, НДС5, БезНДС
     *
     * @return string
     */
    public function getRateVAT() : string
    {
        return $this->rateVAT;
    }
    /**
     * Ставка НДС. Возможные значения: НДС22, НДС10, НДС7, НДС5, БезНДС
     *
     * @param string $rateVAT
     *
     * @return self
     */
    public function setRateVAT(string $rateVAT) : self
    {
        $this->rateVAT = $rateVAT;
        return $this;
    }
    /**
     * Сумма услуги с НДС, руб.
     *
     * @return float
     */
    public function getSumIncludingVAT() : float
    {
        return $this->sumIncludingVAT;
    }
    /**
     * Сумма услуги с НДС, руб.
     *
     * @param float $sumIncludingVAT
     *
     * @return self
     */
    public function setSumIncludingVAT(float $sumIncludingVAT) : self
    {
        $this->sumIncludingVAT = $sumIncludingVAT;
        return $this;
    }
    /**
     * Тип дополнительной услуги. 1 — Доставка, 2 — Курьерская доставка, 3 — Доставка и выдача на терминале, 4 — Доставка и выдача на ПВЗ, 5 — Подъем на этаж, 6 — Доставка интернет-магазина, 7 — Погрузо-разгрузочные работы интернет-магазина
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Тип дополнительной услуги. 1 — Доставка, 2 — Курьерская доставка, 3 — Доставка и выдача на терминале, 4 — Доставка и выдача на ПВЗ, 5 — Подъем на этаж, 6 — Доставка интернет-магазина, 7 — Погрузо-разгрузочные работы интернет-магазина
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}