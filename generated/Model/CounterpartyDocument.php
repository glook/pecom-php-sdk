<?php

namespace glook\PecomSdk\Generated\Model;

class CounterpartyDocument
{
    /**
     * @var null|DocumentType
     */
    protected $documentType;

    /**
     * Дата окончания действия документа удостоверяющего личность.
     *
     * @var null|\DateTime
     */
    protected $expiredDate;

    /**
     * Номер документа удостоверяющего личность.
     *
     * @var null|string
     */
    protected $number;

    /**
     * Серия документа удостоверяющего личность.
     *
     * @var null|string
     */
    protected $series;

    public function getDocumentType(): ?DocumentType
    {
        return $this->documentType;
    }

    public function setDocumentType(?DocumentType $documentType): self
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Дата окончания действия документа удостоверяющего личность.
     */
    public function getExpiredDate(): ?\DateTime
    {
        return $this->expiredDate;
    }

    /**
     * Дата окончания действия документа удостоверяющего личность.
     */
    public function setExpiredDate(?\DateTime $expiredDate): self
    {
        $this->expiredDate = $expiredDate;

        return $this;
    }

    /**
     * Номер документа удостоверяющего личность.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Номер документа удостоверяющего личность.
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Серия документа удостоверяющего личность.
     */
    public function getSeries(): ?string
    {
        return $this->series;
    }

    /**
     * Серия документа удостоверяющего личность.
     */
    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }
}
