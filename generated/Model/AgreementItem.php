<?php

namespace glook\PecomSdk\Generated\Model;

class AgreementItem
{
    /**
     * Актуальная дата начала действия соглашения
     *
     * @var string
     */
    protected $beginDate;
    /**
     * Актуальная дата окончания действия соглашения
     *
     * @var string
     */
    protected $endDate;
    /**
     * 
     *
     * @var CounterpartsSpecialCondition
     */
    protected $specialCondition;
    /**
     * Актуальная дата начала действия соглашения
     *
     * @return string
     */
    public function getBeginDate() : string
    {
        return $this->beginDate;
    }
    /**
     * Актуальная дата начала действия соглашения
     *
     * @param string $beginDate
     *
     * @return self
     */
    public function setBeginDate(string $beginDate) : self
    {
        $this->beginDate = $beginDate;
        return $this;
    }
    /**
     * Актуальная дата окончания действия соглашения
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * Актуальная дата окончания действия соглашения
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return CounterpartsSpecialCondition
     */
    public function getSpecialCondition() : CounterpartsSpecialCondition
    {
        return $this->specialCondition;
    }
    /**
     * 
     *
     * @param CounterpartsSpecialCondition $specialCondition
     *
     * @return self
     */
    public function setSpecialCondition(CounterpartsSpecialCondition $specialCondition) : self
    {
        $this->specialCondition = $specialCondition;
        return $this;
    }
}