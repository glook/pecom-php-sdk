<?php

namespace glook\PecomSdk\Generated\Model;

class ForcedStorageItem
{
    /**
     * Праздничные дни
     *
     * @var string[]|null
     */
    protected $holidays;
    /**
     * Расчёт услуги вынужденное хранение
     *
     * @var ForcedStoragePeriod[]|null
     */
    protected $items;
    /**
     * Праздничные дни
     *
     * @return string[]|null
     */
    public function getHolidays() : ?array
    {
        return $this->holidays;
    }
    /**
     * Праздничные дни
     *
     * @param string[]|null $holidays
     *
     * @return self
     */
    public function setHolidays(?array $holidays) : self
    {
        $this->holidays = $holidays;
        return $this;
    }
    /**
     * Расчёт услуги вынужденное хранение
     *
     * @return ForcedStoragePeriod[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Расчёт услуги вынужденное хранение
     *
     * @param ForcedStoragePeriod[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}