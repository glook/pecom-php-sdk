<?php

namespace glook\PecomSdk\Generated\Model;

class BasicStatusItem
{
    /**
     * Параметры груза
     *
     * @var null|BasicCargoInfo
     */
    protected $cargo;

    /**
     * Общая информация о грузе
     *
     * @var null|BasicStatusInfo
     */
    protected $info;

    /**
     * Параметры груза
     */
    public function getCargo(): ?BasicCargoInfo
    {
        return $this->cargo;
    }

    /**
     * Параметры груза
     */
    public function setCargo(?BasicCargoInfo $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Общая информация о грузе
     */
    public function getInfo(): ?BasicStatusInfo
    {
        return $this->info;
    }

    /**
     * Общая информация о грузе
     */
    public function setInfo(?BasicStatusInfo $info): self
    {
        $this->info = $info;

        return $this;
    }
}
