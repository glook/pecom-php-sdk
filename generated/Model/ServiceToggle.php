<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceToggle
{
    /**
     * Заказана ли услуга
     *
     * @var bool|null
     */
    protected $enabled;
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
}