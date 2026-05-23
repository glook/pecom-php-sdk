<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargoCommon
{
    /**
     * @var bool
     */
    protected $accompanyingDocuments;

    /**
     * @var null|string
     */
    protected $accompanyingDocumentsNumbers;

    /**
     * @var null|float
     */
    protected $accompanyingDocumentsSum;

    /**
     * Дата авизации.
     *
     * @var null|string
     */
    protected $avisationDateTime;

    /**
     * Описание груза.
     *
     * @var string
     */
    protected $decription;

    /**
     * @var null|string
     */
    protected $orderNumber;

    /**
     * @var int
     */
    protected $palletesCount;

    public function getAccompanyingDocuments(): bool
    {
        return $this->accompanyingDocuments;
    }

    public function setAccompanyingDocuments(bool $accompanyingDocuments): self
    {
        $this->accompanyingDocuments = $accompanyingDocuments;

        return $this;
    }

    public function getAccompanyingDocumentsNumbers(): ?string
    {
        return $this->accompanyingDocumentsNumbers;
    }

    public function setAccompanyingDocumentsNumbers(?string $accompanyingDocumentsNumbers): self
    {
        $this->accompanyingDocumentsNumbers = $accompanyingDocumentsNumbers;

        return $this;
    }

    public function getAccompanyingDocumentsSum(): ?float
    {
        return $this->accompanyingDocumentsSum;
    }

    public function setAccompanyingDocumentsSum(?float $accompanyingDocumentsSum): self
    {
        $this->accompanyingDocumentsSum = $accompanyingDocumentsSum;

        return $this;
    }

    /**
     * Дата авизации.
     */
    public function getAvisationDateTime(): ?string
    {
        return $this->avisationDateTime;
    }

    /**
     * Дата авизации.
     */
    public function setAvisationDateTime(?string $avisationDateTime): self
    {
        $this->avisationDateTime = $avisationDateTime;

        return $this;
    }

    /**
     * Описание груза.
     */
    public function getDecription(): string
    {
        return $this->decription;
    }

    /**
     * Описание груза.
     */
    public function setDecription(string $decription): self
    {
        $this->decription = $decription;

        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getPalletesCount(): int
    {
        return $this->palletesCount;
    }

    public function setPalletesCount(int $palletesCount): self
    {
        $this->palletesCount = $palletesCount;

        return $this;
    }
}
