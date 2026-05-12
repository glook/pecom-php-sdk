<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesChecknocalcservicesPostResponse200Item
{
    /**
     * Условие предоставления услуги
     *
     * @var BranchesSpecialCondition
     */
    protected $specialCondition;
    /**
     * Условие предоставления услуги
     *
     * @return BranchesSpecialCondition
     */
    public function getSpecialCondition() : BranchesSpecialCondition
    {
        return $this->specialCondition;
    }
    /**
     * Условие предоставления услуги
     *
     * @param BranchesSpecialCondition $specialCondition
     *
     * @return self
     */
    public function setSpecialCondition(BranchesSpecialCondition $specialCondition) : self
    {
        $this->specialCondition = $specialCondition;
        return $this;
    }
}