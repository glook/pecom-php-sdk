<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesChecknocalcservicesPostResponse200Item
{
    /**
     * 
     *
     * @var BranchesSpecialCondition
     */
    protected $specialCondition;
    /**
     * 
     *
     * @return BranchesSpecialCondition
     */
    public function getSpecialCondition() : BranchesSpecialCondition
    {
        return $this->specialCondition;
    }
    /**
     * 
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