<?php

namespace glook\PecomSdk\Generated\Model;

class Period
{
    /**
     * Временной интервал без наценки на забор/доставку в ночное время. Значение `false` означает, что будет наценка за ночное время (возможность оказания услуги необходимо уточнять у менеджера)
     *
     * @var bool|null
     */
    protected $isDayLight;
    /**
     * Время начала интервала
     *
     * @var string|null
     */
    protected $periodTimeFrom;
    /**
     * Время окончания интервала
     *
     * @var string|null
     */
    protected $periodTimeTo;
    /**
     * Временной интервал без наценки на забор/доставку в ночное время. Значение `false` означает, что будет наценка за ночное время (возможность оказания услуги необходимо уточнять у менеджера)
     *
     * @return bool|null
     */
    public function getIsDayLight() : ?bool
    {
        return $this->isDayLight;
    }
    /**
     * Временной интервал без наценки на забор/доставку в ночное время. Значение `false` означает, что будет наценка за ночное время (возможность оказания услуги необходимо уточнять у менеджера)
     *
     * @param bool|null $isDayLight
     *
     * @return self
     */
    public function setIsDayLight(?bool $isDayLight) : self
    {
        $this->isDayLight = $isDayLight;
        return $this;
    }
    /**
     * Время начала интервала
     *
     * @return string|null
     */
    public function getPeriodTimeFrom() : ?string
    {
        return $this->periodTimeFrom;
    }
    /**
     * Время начала интервала
     *
     * @param string|null $periodTimeFrom
     *
     * @return self
     */
    public function setPeriodTimeFrom(?string $periodTimeFrom) : self
    {
        $this->periodTimeFrom = $periodTimeFrom;
        return $this;
    }
    /**
     * Время окончания интервала
     *
     * @return string|null
     */
    public function getPeriodTimeTo() : ?string
    {
        return $this->periodTimeTo;
    }
    /**
     * Время окончания интервала
     *
     * @param string|null $periodTimeTo
     *
     * @return self
     */
    public function setPeriodTimeTo(?string $periodTimeTo) : self
    {
        $this->periodTimeTo = $periodTimeTo;
        return $this;
    }
}