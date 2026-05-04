<?php

namespace glook\PecomSdk\Generated\Model;

class WorkTime
{
    /**
     * Начало рабочего дня
     *
     * @var string
     */
    protected $periodTimeFrom;
    /**
     * Конец рабочего дня
     *
     * @var string
     */
    protected $periodTimeTo;
    /**
     * Начало рабочего дня
     *
     * @return string
     */
    public function getPeriodTimeFrom() : string
    {
        return $this->periodTimeFrom;
    }
    /**
     * Начало рабочего дня
     *
     * @param string $periodTimeFrom
     *
     * @return self
     */
    public function setPeriodTimeFrom(string $periodTimeFrom) : self
    {
        $this->periodTimeFrom = $periodTimeFrom;
        return $this;
    }
    /**
     * Конец рабочего дня
     *
     * @return string
     */
    public function getPeriodTimeTo() : string
    {
        return $this->periodTimeTo;
    }
    /**
     * Конец рабочего дня
     *
     * @param string $periodTimeTo
     *
     * @return self
     */
    public function setPeriodTimeTo(string $periodTimeTo) : self
    {
        $this->periodTimeTo = $periodTimeTo;
        return $this;
    }
}