<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceWithPayer
{
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