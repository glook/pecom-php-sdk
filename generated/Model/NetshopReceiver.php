<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopReceiver
{
    /**
     * @var string
     */
    protected $inn;

    /**
     * Название получателя.
     *
     * @var string
     */
    protected $receiver;

    /**
     * @var NetshopStore[]
     */
    protected $stores;

    public function getInn(): string
    {
        return $this->inn;
    }

    public function setInn(string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Название получателя.
     */
    public function getReceiver(): string
    {
        return $this->receiver;
    }

    /**
     * Название получателя.
     */
    public function setReceiver(string $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * @return NetshopStore[]
     */
    public function getStores(): array
    {
        return $this->stores;
    }

    /**
     * @param NetshopStore[] $stores
     */
    public function setStores(array $stores): self
    {
        $this->stores = $stores;

        return $this;
    }
}
