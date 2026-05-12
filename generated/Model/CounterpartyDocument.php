<?php

namespace glook\PecomSdk\Generated\Model;

class CounterpartyDocument
{
    /**
     * 
     *
     * @var DocumentType|null
     */
    protected $documentType;
    /**
     * Дата окончания действия документа удостоверяющего личность
     *
     * @var \DateTime|null
     */
    protected $expiredDate;
    /**
     * Номер документа удостоверяющего личность
     *
     * @var string|null
     */
    protected $number;
    /**
     * Серия документа удостоверяющего личность
     *
     * @var string|null
     */
    protected $series;
    /**
     * 
     *
     * @return DocumentType|null
     */
    public function getDocumentType() : ?DocumentType
    {
        return $this->documentType;
    }
    /**
     * 
     *
     * @param DocumentType|null $documentType
     *
     * @return self
     */
    public function setDocumentType(?DocumentType $documentType) : self
    {
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Дата окончания действия документа удостоверяющего личность
     *
     * @return \DateTime|null
     */
    public function getExpiredDate() : ?\DateTime
    {
        return $this->expiredDate;
    }
    /**
     * Дата окончания действия документа удостоверяющего личность
     *
     * @param \DateTime|null $expiredDate
     *
     * @return self
     */
    public function setExpiredDate(?\DateTime $expiredDate) : self
    {
        $this->expiredDate = $expiredDate;
        return $this;
    }
    /**
     * Номер документа удостоверяющего личность
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * Номер документа удостоверяющего личность
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * Серия документа удостоверяющего личность
     *
     * @return string|null
     */
    public function getSeries() : ?string
    {
        return $this->series;
    }
    /**
     * Серия документа удостоверяющего личность
     *
     * @param string|null $series
     *
     * @return self
     */
    public function setSeries(?string $series) : self
    {
        $this->series = $series;
        return $this;
    }
}