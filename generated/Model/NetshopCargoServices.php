<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargoServices
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $documentsReturningEnabled;
    /**
     * 
     *
     * @var NetshopInsurance|null
     */
    protected $insurance;
    /**
     * 
     *
     * @var NetshopPalletTransporting
     */
    protected $palletTransporting;
    /**
     * 
     *
     * @return bool|null
     */
    public function getDocumentsReturningEnabled() : ?bool
    {
        return $this->documentsReturningEnabled;
    }
    /**
     * 
     *
     * @param bool|null $documentsReturningEnabled
     *
     * @return self
     */
    public function setDocumentsReturningEnabled(?bool $documentsReturningEnabled) : self
    {
        $this->documentsReturningEnabled = $documentsReturningEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopInsurance|null
     */
    public function getInsurance() : ?NetshopInsurance
    {
        return $this->insurance;
    }
    /**
     * 
     *
     * @param NetshopInsurance|null $insurance
     *
     * @return self
     */
    public function setInsurance(?NetshopInsurance $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopPalletTransporting
     */
    public function getPalletTransporting() : NetshopPalletTransporting
    {
        return $this->palletTransporting;
    }
    /**
     * 
     *
     * @param NetshopPalletTransporting $palletTransporting
     *
     * @return self
     */
    public function setPalletTransporting(NetshopPalletTransporting $palletTransporting) : self
    {
        $this->palletTransporting = $palletTransporting;
        return $this;
    }
}