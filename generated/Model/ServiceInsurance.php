<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceInsurance
{
    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб, поле обязательно, если "enabled":true
     *
     * @var float|null
     */
    protected $cost;
    /**
     * Заказана ли услуга
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * 
     *
     * @var PreregistrationPayer|null
     */
    protected $payer;
    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб, поле обязательно, если "enabled":true
     *
     * @return float|null
     */
    public function getCost() : ?float
    {
        return $this->cost;
    }
    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб, поле обязательно, если "enabled":true
     *
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost) : self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     * Заказана ли услуга
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * Заказана ли услуга
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationPayer|null
     */
    public function getPayer() : ?PreregistrationPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param PreregistrationPayer|null $payer
     *
     * @return self
     */
    public function setPayer(?PreregistrationPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}