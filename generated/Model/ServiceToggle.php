<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceToggle
{
    /**
     * Заказана ли услуга
     *
     * @var null|bool
     */
    protected $enabled;

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
}
