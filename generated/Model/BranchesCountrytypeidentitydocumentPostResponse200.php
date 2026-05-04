<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesCountrytypeidentitydocumentPostResponse200
{
    /**
     * Список допустимых документов, удостоверяющих личность
     *
     * @var IdentityDocument[]
     */
    protected $result;
    /**
     * Список допустимых документов, удостоверяющих личность
     *
     * @return IdentityDocument[]
     */
    public function getResult() : array
    {
        return $this->result;
    }
    /**
     * Список допустимых документов, удостоверяющих личность
     *
     * @param IdentityDocument[] $result
     *
     * @return self
     */
    public function setResult(array $result) : self
    {
        $this->result = $result;
        return $this;
    }
}