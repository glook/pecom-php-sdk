<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatus
{
    /**
     * Основной статус груза/заказа
     *
     * @var null|string
     */
    protected $clientStatus;

    /**
     * Детализация основного статуса
     *
     * @var null|string
     */
    protected $clientStatusLevel2;

    /**
     * id статуса груза
     *
     * @var null|int
     */
    protected $id;

    /**
     * Признак активности основного статуса
     *
     * @var null|bool
     */
    protected $isActive;

    /**
     * Уточняющая информация к статусу груза/заказа
     *
     * @var null|string
     */
    protected $tooltip;

    /**
     * Основной статус груза/заказа
     */
    public function getClientStatus(): ?string
    {
        return $this->clientStatus;
    }

    /**
     * Основной статус груза/заказа
     */
    public function setClientStatus(?string $clientStatus): self
    {
        $this->clientStatus = $clientStatus;

        return $this;
    }

    /**
     * Детализация основного статуса
     */
    public function getClientStatusLevel2(): ?string
    {
        return $this->clientStatusLevel2;
    }

    /**
     * Детализация основного статуса
     */
    public function setClientStatusLevel2(?string $clientStatusLevel2): self
    {
        $this->clientStatusLevel2 = $clientStatusLevel2;

        return $this;
    }

    /**
     * id статуса груза
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * id статуса груза
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Признак активности основного статуса
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Признак активности основного статуса
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Уточняющая информация к статусу груза/заказа
     */
    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    /**
     * Уточняющая информация к статусу груза/заказа
     */
    public function setTooltip(?string $tooltip): self
    {
        $this->tooltip = $tooltip;

        return $this;
    }
}
