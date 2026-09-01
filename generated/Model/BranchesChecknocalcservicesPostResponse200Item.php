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
     */
    public function getSpecialCondition(): BranchesSpecialCondition
    {
        return $this->specialCondition;
    }

    /**
     * Условие предоставления услуги
     */
    public function setSpecialCondition(BranchesSpecialCondition $specialCondition): self
    {
        $this->specialCondition = $specialCondition;

        return $this;
    }
}
