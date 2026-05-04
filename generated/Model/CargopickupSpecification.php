<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupSpecification
{
    /**
     * 
     *
     * @var CargopickupSpecificationItem[]
     */
    protected $specifications;
    /**
     * 
     *
     * @return CargopickupSpecificationItem[]
     */
    public function getSpecifications() : array
    {
        return $this->specifications;
    }
    /**
     * 
     *
     * @param CargopickupSpecificationItem[] $specifications
     *
     * @return self
     */
    public function setSpecifications(array $specifications) : self
    {
        $this->specifications = $specifications;
        return $this;
    }
}