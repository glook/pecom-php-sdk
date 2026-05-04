<?php

namespace glook\PecomSdk\Generated\Model;

class DivisionTimeOfWork
{
    /**
     * День недели (1 - понедельник, 6 - суббота)
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * Начало обеденного перерыва
     *
     * @var string|null
     */
    protected $dinnerFrom;
    /**
     * Конец обеденного перерыва
     *
     * @var string|null
     */
    protected $dinnerTo;
    /**
     * Начало рабочего дня. Пустая строка означает время 00:00
     *
     * @var string
     */
    protected $workFrom;
    /**
     * Конец рабочего дня
     *
     * @var string
     */
    protected $workTo;
    /**
     * День недели (1 - понедельник, 6 - суббота)
     *
     * @return string
     */
    public function getDayOfWeek() : string
    {
        return $this->dayOfWeek;
    }
    /**
     * День недели (1 - понедельник, 6 - суббота)
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek) : self
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Начало обеденного перерыва
     *
     * @return string|null
     */
    public function getDinnerFrom() : ?string
    {
        return $this->dinnerFrom;
    }
    /**
     * Начало обеденного перерыва
     *
     * @param string|null $dinnerFrom
     *
     * @return self
     */
    public function setDinnerFrom(?string $dinnerFrom) : self
    {
        $this->dinnerFrom = $dinnerFrom;
        return $this;
    }
    /**
     * Конец обеденного перерыва
     *
     * @return string|null
     */
    public function getDinnerTo() : ?string
    {
        return $this->dinnerTo;
    }
    /**
     * Конец обеденного перерыва
     *
     * @param string|null $dinnerTo
     *
     * @return self
     */
    public function setDinnerTo(?string $dinnerTo) : self
    {
        $this->dinnerTo = $dinnerTo;
        return $this;
    }
    /**
     * Начало рабочего дня. Пустая строка означает время 00:00
     *
     * @return string
     */
    public function getWorkFrom() : string
    {
        return $this->workFrom;
    }
    /**
     * Начало рабочего дня. Пустая строка означает время 00:00
     *
     * @param string $workFrom
     *
     * @return self
     */
    public function setWorkFrom(string $workFrom) : self
    {
        $this->workFrom = $workFrom;
        return $this;
    }
    /**
     * Конец рабочего дня
     *
     * @return string
     */
    public function getWorkTo() : string
    {
        return $this->workTo;
    }
    /**
     * Конец рабочего дня
     *
     * @param string $workTo
     *
     * @return self
     */
    public function setWorkTo(string $workTo) : self
    {
        $this->workTo = $workTo;
        return $this;
    }
}