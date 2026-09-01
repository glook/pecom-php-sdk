<?php

namespace glook\PecomSdk\Generated\Model;

class Period
{
    /**
     * Временной интервал без наценки на забор/доставку в ночное время. Значение `false` означает, что будет наценка за ночное время (возможность оказания услуги необходимо уточнять у менеджера)
     *
     * @var null|bool
     */
    protected $isDayLight;

    /**
     * Время начала интервала
     *
     * @var null|string
     */
    protected $periodTimeFrom;

    /**
     * Время окончания интервала
     *
     * @var null|string
     */
    protected $periodTimeTo;

    /**
     * Временной интервал без наценки на забор/доставку в ночное время. Значение `false` означает, что будет наценка за ночное время (возможность оказания услуги необходимо уточнять у менеджера)
     */
    public function getIsDayLight(): ?bool
    {
        return $this->isDayLight;
    }

    /**
     * Временной интервал без наценки на забор/доставку в ночное время. Значение `false` означает, что будет наценка за ночное время (возможность оказания услуги необходимо уточнять у менеджера)
     */
    public function setIsDayLight(?bool $isDayLight): self
    {
        $this->isDayLight = $isDayLight;

        return $this;
    }

    /**
     * Время начала интервала
     */
    public function getPeriodTimeFrom(): ?string
    {
        return $this->periodTimeFrom;
    }

    /**
     * Время начала интервала
     */
    public function setPeriodTimeFrom(?string $periodTimeFrom): self
    {
        $this->periodTimeFrom = $periodTimeFrom;

        return $this;
    }

    /**
     * Время окончания интервала
     */
    public function getPeriodTimeTo(): ?string
    {
        return $this->periodTimeTo;
    }

    /**
     * Время окончания интервала
     */
    public function setPeriodTimeTo(?string $periodTimeTo): self
    {
        $this->periodTimeTo = $periodTimeTo;

        return $this;
    }
}
