<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitResponse
{
    /**
     * Информация о принятии данных грузов, описанных в заявках.
     *
     * @var CargoPickupNetworkSubmitResponseCargosItem[]
     */
    protected $cargos;

    /**
     * Номер заявки.
     *
     * @var int
     */
    protected $documentId;

    /**
     * Информация о принятии данных грузов, описанных в заявках.
     *
     * @return CargoPickupNetworkSubmitResponseCargosItem[]
     */
    public function getCargos(): array
    {
        return $this->cargos;
    }

    /**
     * Информация о принятии данных грузов, описанных в заявках.
     *
     * @param CargoPickupNetworkSubmitResponseCargosItem[] $cargos
     */
    public function setCargos(array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }

    /**
     * Номер заявки.
     */
    public function getDocumentId(): int
    {
        return $this->documentId;
    }

    /**
     * Номер заявки.
     */
    public function setDocumentId(int $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }
}
