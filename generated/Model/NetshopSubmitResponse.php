<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopSubmitResponse
{
    /**
     * @var NetshopSubmittedCargo[]
     */
    protected $cargos;

    /**
     * @var int
     */
    protected $documentId;

    /**
     * @return NetshopSubmittedCargo[]
     */
    public function getCargos(): array
    {
        return $this->cargos;
    }

    /**
     * @param NetshopSubmittedCargo[] $cargos
     */
    public function setCargos(array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }

    public function getDocumentId(): int
    {
        return $this->documentId;
    }

    public function setDocumentId(int $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }
}
