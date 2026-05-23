<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSpecification
{
    /**
     * @var null|PreregistrationSpecificationItem[]
     */
    protected $specifications;

    /**
     * @return null|PreregistrationSpecificationItem[]
     */
    public function getSpecifications(): ?array
    {
        return $this->specifications;
    }

    /**
     * @param null|PreregistrationSpecificationItem[] $specifications
     */
    public function setSpecifications(?array $specifications): self
    {
        $this->specifications = $specifications;

        return $this;
    }
}
