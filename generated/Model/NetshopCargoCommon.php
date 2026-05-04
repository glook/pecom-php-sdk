<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargoCommon
{
    /**
     * 
     *
     * @var bool
     */
    protected $accompanyingDocuments;
    /**
     * 
     *
     * @var string|null
     */
    protected $accompanyingDocumentsNumbers;
    /**
     * 
     *
     * @var float|null
     */
    protected $accompanyingDocumentsSum;
    /**
     * Дата авизации
     *
     * @var string|null
     */
    protected $avisationDateTime;
    /**
     * Описание груза
     *
     * @var string
     */
    protected $decription;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * 
     *
     * @var int
     */
    protected $palletesCount;
    /**
     * 
     *
     * @return bool
     */
    public function getAccompanyingDocuments() : bool
    {
        return $this->accompanyingDocuments;
    }
    /**
     * 
     *
     * @param bool $accompanyingDocuments
     *
     * @return self
     */
    public function setAccompanyingDocuments(bool $accompanyingDocuments) : self
    {
        $this->accompanyingDocuments = $accompanyingDocuments;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccompanyingDocumentsNumbers() : ?string
    {
        return $this->accompanyingDocumentsNumbers;
    }
    /**
     * 
     *
     * @param string|null $accompanyingDocumentsNumbers
     *
     * @return self
     */
    public function setAccompanyingDocumentsNumbers(?string $accompanyingDocumentsNumbers) : self
    {
        $this->accompanyingDocumentsNumbers = $accompanyingDocumentsNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAccompanyingDocumentsSum() : ?float
    {
        return $this->accompanyingDocumentsSum;
    }
    /**
     * 
     *
     * @param float|null $accompanyingDocumentsSum
     *
     * @return self
     */
    public function setAccompanyingDocumentsSum(?float $accompanyingDocumentsSum) : self
    {
        $this->accompanyingDocumentsSum = $accompanyingDocumentsSum;
        return $this;
    }
    /**
     * Дата авизации
     *
     * @return string|null
     */
    public function getAvisationDateTime() : ?string
    {
        return $this->avisationDateTime;
    }
    /**
     * Дата авизации
     *
     * @param string|null $avisationDateTime
     *
     * @return self
     */
    public function setAvisationDateTime(?string $avisationDateTime) : self
    {
        $this->avisationDateTime = $avisationDateTime;
        return $this;
    }
    /**
     * Описание груза
     *
     * @return string
     */
    public function getDecription() : string
    {
        return $this->decription;
    }
    /**
     * Описание груза
     *
     * @param string $decription
     *
     * @return self
     */
    public function setDecription(string $decription) : self
    {
        $this->decription = $decription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * 
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPalletesCount() : int
    {
        return $this->palletesCount;
    }
    /**
     * 
     *
     * @param int $palletesCount
     *
     * @return self
     */
    public function setPalletesCount(int $palletesCount) : self
    {
        $this->palletesCount = $palletesCount;
        return $this;
    }
}