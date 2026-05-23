<?php

namespace glook\PecomSdk\Generated\Model;

class AgreementItem
{
    /**
     * Актуальная дата начала действия соглашения.
     *
     * @var string
     */
    protected $beginDate;

    /**
     * Актуальная дата окончания действия соглашения.
     *
     * @var string
     */
    protected $endDate;

    /**
     * @var CounterpartsSpecialCondition
     */
    protected $specialCondition;

    /**
     * Актуальная дата начала действия соглашения.
     */
    public function getBeginDate(): string
    {
        return $this->beginDate;
    }

    /**
     * Актуальная дата начала действия соглашения.
     */
    public function setBeginDate(string $beginDate): self
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Актуальная дата окончания действия соглашения.
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * Актуальная дата окончания действия соглашения.
     */
    public function setEndDate(string $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getSpecialCondition(): CounterpartsSpecialCondition
    {
        return $this->specialCondition;
    }

    public function setSpecialCondition(CounterpartsSpecialCondition $specialCondition): self
    {
        $this->specialCondition = $specialCondition;

        return $this;
    }
}
