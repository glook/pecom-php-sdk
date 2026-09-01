<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceInsurance
{
    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб, поле обязательно, если "enabled":true
     *
     * @var null|float
     */
    protected $cost;

    /**
     * Заказана ли услуга
     *
     * @var null|bool
     */
    protected $enabled;

    /**
     * @var null|PreregistrationPayer
     */
    protected $payer;

    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб, поле обязательно, если "enabled":true
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб, поле обязательно, если "enabled":true
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Заказана ли услуга
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Заказана ли услуга
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getPayer(): ?PreregistrationPayer
    {
        return $this->payer;
    }

    public function setPayer(?PreregistrationPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }
}
