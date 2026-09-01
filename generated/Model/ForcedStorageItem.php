<?php

namespace glook\PecomSdk\Generated\Model;

class ForcedStorageItem
{
    /**
     * Праздничные дни
     *
     * @var null|string[]
     */
    protected $holidays;

    /**
     * Расчёт услуги вынужденное хранение
     *
     * @var null|ForcedStoragePeriod[]
     */
    protected $items;

    /**
     * Праздничные дни
     *
     * @return null|string[]
     */
    public function getHolidays(): ?array
    {
        return $this->holidays;
    }

    /**
     * Праздничные дни
     *
     * @param null|string[] $holidays
     */
    public function setHolidays(?array $holidays): self
    {
        $this->holidays = $holidays;

        return $this;
    }

    /**
     * Расчёт услуги вынужденное хранение
     *
     * @return null|ForcedStoragePeriod[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Расчёт услуги вынужденное хранение
     *
     * @param null|ForcedStoragePeriod[] $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
