<?php

namespace glook\PecomSdk\Generated\Model;

class DivisionTimeOfWork
{
    /**
     * День недели (1 - понедельник, 6 - суббота).
     *
     * @var string
     */
    protected $dayOfWeek;

    /**
     * Начало обеденного перерыва.
     *
     * @var null|string
     */
    protected $dinnerFrom;

    /**
     * Конец обеденного перерыва.
     *
     * @var null|string
     */
    protected $dinnerTo;

    /**
     * Начало рабочего дня. Пустая строка означает время 00:00.
     *
     * @var string
     */
    protected $workFrom;

    /**
     * Конец рабочего дня.
     *
     * @var string
     */
    protected $workTo;

    /**
     * День недели (1 - понедельник, 6 - суббота).
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }

    /**
     * День недели (1 - понедельник, 6 - суббота).
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Начало обеденного перерыва.
     */
    public function getDinnerFrom(): ?string
    {
        return $this->dinnerFrom;
    }

    /**
     * Начало обеденного перерыва.
     */
    public function setDinnerFrom(?string $dinnerFrom): self
    {
        $this->dinnerFrom = $dinnerFrom;

        return $this;
    }

    /**
     * Конец обеденного перерыва.
     */
    public function getDinnerTo(): ?string
    {
        return $this->dinnerTo;
    }

    /**
     * Конец обеденного перерыва.
     */
    public function setDinnerTo(?string $dinnerTo): self
    {
        $this->dinnerTo = $dinnerTo;

        return $this;
    }

    /**
     * Начало рабочего дня. Пустая строка означает время 00:00.
     */
    public function getWorkFrom(): string
    {
        return $this->workFrom;
    }

    /**
     * Начало рабочего дня. Пустая строка означает время 00:00.
     */
    public function setWorkFrom(string $workFrom): self
    {
        $this->workFrom = $workFrom;

        return $this;
    }

    /**
     * Конец рабочего дня.
     */
    public function getWorkTo(): string
    {
        return $this->workTo;
    }

    /**
     * Конец рабочего дня.
     */
    public function setWorkTo(string $workTo): self
    {
        $this->workTo = $workTo;

        return $this;
    }
}
