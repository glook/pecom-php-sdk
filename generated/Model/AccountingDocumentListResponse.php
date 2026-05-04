<?php

namespace glook\PecomSdk\Generated\Model;

class AccountingDocumentListResponse
{
    /**
     * Список документов
     *
     * @var AccountingDocument[]|null
     */
    protected $documents;
    /**
     * Список документов
     *
     * @return AccountingDocument[]|null
     */
    public function getDocuments() : ?array
    {
        return $this->documents;
    }
    /**
     * Список документов
     *
     * @param AccountingDocument[]|null $documents
     *
     * @return self
     */
    public function setDocuments(?array $documents) : self
    {
        $this->documents = $documents;
        return $this;
    }
}