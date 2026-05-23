<?php

namespace glook\PecomSdk\Generated\Model;

class AccountingDocumentListResponse
{
    /**
     * Список документов.
     *
     * @var null|AccountingDocument[]
     */
    protected $documents;

    /**
     * Список документов.
     *
     * @return null|AccountingDocument[]
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Список документов.
     *
     * @param null|AccountingDocument[] $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }
}
