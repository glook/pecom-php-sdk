<?php

namespace glook\PecomSdk\Generated\Model;

class ScheduleShortWorkDay
{
    /**
     * Обеденный перерыв
     *
     * @var string|null
     */
    protected $breakTime;
    /**
     * Дата сокращённого дня
     *
     * @var string
     */
    protected $date;
    /**
     * Время работы сокращённого дня
     *
     * @var WorkTime
     */
    protected $workTime;
    /**
     * Обеденный перерыв
     *
     * @return string|null
     */
    public function getBreakTime() : ?string
    {
        return $this->breakTime;
    }
    /**
     * Обеденный перерыв
     *
     * @param string|null $breakTime
     *
     * @return self
     */
    public function setBreakTime(?string $breakTime) : self
    {
        $this->breakTime = $breakTime;
        return $this;
    }
    /**
     * Дата сокращённого дня
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Дата сокращённого дня
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Время работы сокращённого дня
     *
     * @return WorkTime
     */
    public function getWorkTime() : WorkTime
    {
        return $this->workTime;
    }
    /**
     * Время работы сокращённого дня
     *
     * @param WorkTime $workTime
     *
     * @return self
     */
    public function setWorkTime(WorkTime $workTime) : self
    {
        $this->workTime = $workTime;
        return $this;
    }
}