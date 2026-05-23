<?php

namespace glook\PecomSdk\Generated\Model;

class ScheduleShortWorkDay
{
    /**
     * Обеденный перерыв.
     *
     * @var null|string
     */
    protected $breakTime;

    /**
     * Дата сокращённого дня.
     *
     * @var string
     */
    protected $date;

    /**
     * Время работы сокращённого дня.
     *
     * @var WorkTime
     */
    protected $workTime;

    /**
     * Обеденный перерыв.
     */
    public function getBreakTime(): ?string
    {
        return $this->breakTime;
    }

    /**
     * Обеденный перерыв.
     */
    public function setBreakTime(?string $breakTime): self
    {
        $this->breakTime = $breakTime;

        return $this;
    }

    /**
     * Дата сокращённого дня.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Дата сокращённого дня.
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Время работы сокращённого дня.
     */
    public function getWorkTime(): WorkTime
    {
        return $this->workTime;
    }

    /**
     * Время работы сокращённого дня.
     */
    public function setWorkTime(WorkTime $workTime): self
    {
        $this->workTime = $workTime;

        return $this;
    }
}
