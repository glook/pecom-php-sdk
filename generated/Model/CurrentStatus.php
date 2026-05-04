<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatus
{
    /**
     * Основной статус груза/заказа
     *
     * @var string|null
     */
    protected $clientStatus;
    /**
     * Детализация основного статуса
     *
     * @var string|null
     */
    protected $clientStatusLevel2;
    /**
     * id статуса груза
     *
     * @var int|null
     */
    protected $id;
    /**
     * Признак активности основного статуса
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Уточняющая информация к статусу груза/заказа
     *
     * @var string|null
     */
    protected $tooltip;
    /**
     * Основной статус груза/заказа
     *
     * @return string|null
     */
    public function getClientStatus() : ?string
    {
        return $this->clientStatus;
    }
    /**
     * Основной статус груза/заказа
     *
     * @param string|null $clientStatus
     *
     * @return self
     */
    public function setClientStatus(?string $clientStatus) : self
    {
        $this->clientStatus = $clientStatus;
        return $this;
    }
    /**
     * Детализация основного статуса
     *
     * @return string|null
     */
    public function getClientStatusLevel2() : ?string
    {
        return $this->clientStatusLevel2;
    }
    /**
     * Детализация основного статуса
     *
     * @param string|null $clientStatusLevel2
     *
     * @return self
     */
    public function setClientStatusLevel2(?string $clientStatusLevel2) : self
    {
        $this->clientStatusLevel2 = $clientStatusLevel2;
        return $this;
    }
    /**
     * id статуса груза
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * id статуса груза
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Признак активности основного статуса
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Признак активности основного статуса
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Уточняющая информация к статусу груза/заказа
     *
     * @return string|null
     */
    public function getTooltip() : ?string
    {
        return $this->tooltip;
    }
    /**
     * Уточняющая информация к статусу груза/заказа
     *
     * @param string|null $tooltip
     *
     * @return self
     */
    public function setTooltip(?string $tooltip) : self
    {
        $this->tooltip = $tooltip;
        return $this;
    }
}