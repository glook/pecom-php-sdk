<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupOrderItem
{
    /**
     * Номер груза / трек-номер
     *
     * @var string
     */
    protected $order;

    /**
     * @var null|string
     */
    protected $senderAddressStock;

    /**
     * @var null|string
     */
    protected $senderCity;

    /**
     * @var null|string
     */
    protected $senderInn;

    /**
     * @var null|string
     */
    protected $senderTitle;

    /**
     * Статус операции забора
     *
     * @var string
     */
    protected $status;

    /**
     * @var float
     */
    protected $volume;

    /**
     * @var float
     */
    protected $weight;

    /**
     * Номер груза / трек-номер
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * Номер груза / трек-номер
     */
    public function setOrder(string $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getSenderAddressStock(): ?string
    {
        return $this->senderAddressStock;
    }

    public function setSenderAddressStock(?string $senderAddressStock): self
    {
        $this->senderAddressStock = $senderAddressStock;

        return $this;
    }

    public function getSenderCity(): ?string
    {
        return $this->senderCity;
    }

    public function setSenderCity(?string $senderCity): self
    {
        $this->senderCity = $senderCity;

        return $this;
    }

    public function getSenderInn(): ?string
    {
        return $this->senderInn;
    }

    public function setSenderInn(?string $senderInn): self
    {
        $this->senderInn = $senderInn;

        return $this;
    }

    public function getSenderTitle(): ?string
    {
        return $this->senderTitle;
    }

    public function setSenderTitle(?string $senderTitle): self
    {
        $this->senderTitle = $senderTitle;

        return $this;
    }

    /**
     * Статус операции забора
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Статус операции забора
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getVolume(): float
    {
        return $this->volume;
    }

    public function setVolume(float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
