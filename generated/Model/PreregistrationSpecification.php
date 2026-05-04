<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSpecification
{
    /**
     * 
     *
     * @var PreregistrationSpecificationItem[]|null
     */
    protected $specifications;
    /**
     * 
     *
     * @return PreregistrationSpecificationItem[]|null
     */
    public function getSpecifications() : ?array
    {
        return $this->specifications;
    }
    /**
     * 
     *
     * @param PreregistrationSpecificationItem[]|null $specifications
     *
     * @return self
     */
    public function setSpecifications(?array $specifications) : self
    {
        $this->specifications = $specifications;
        return $this;
    }
}