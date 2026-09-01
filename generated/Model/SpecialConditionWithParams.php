<?php

namespace glook\PecomSdk\Generated\Model;

class SpecialConditionWithParams
{
    /**
     * Параметры сервиса/скидки
     *
     * @var ParamItem[]
     */
    protected $params;

    /**
     * @var CounterpartsSpecialCondition
     */
    protected $specialCondition;

    /**
     * Параметры сервиса/скидки
     *
     * @return ParamItem[]
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * Параметры сервиса/скидки
     *
     * @param ParamItem[] $params
     */
    public function setParams(array $params): self
    {
        $this->params = $params;

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
