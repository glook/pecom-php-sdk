<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesAllPostResponse200
{
    /**
     * Список филиалов
     *
     * @var Branch[]
     */
    protected $branches;
    /**
     * Список филиалов
     *
     * @return Branch[]
     */
    public function getBranches() : array
    {
        return $this->branches;
    }
    /**
     * Список филиалов
     *
     * @param Branch[] $branches
     *
     * @return self
     */
    public function setBranches(array $branches) : self
    {
        $this->branches = $branches;
        return $this;
    }
}