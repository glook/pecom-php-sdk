<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargoServices
{
    /**
     * @var null|bool
     */
    protected $documentsReturningEnabled;

    /**
     * @var null|NetshopInsurance
     */
    protected $insurance;

    /**
     * @var NetshopPalletTransporting
     */
    protected $palletTransporting;

    public function getDocumentsReturningEnabled(): ?bool
    {
        return $this->documentsReturningEnabled;
    }

    public function setDocumentsReturningEnabled(?bool $documentsReturningEnabled): self
    {
        $this->documentsReturningEnabled = $documentsReturningEnabled;

        return $this;
    }

    public function getInsurance(): ?NetshopInsurance
    {
        return $this->insurance;
    }

    public function setInsurance(?NetshopInsurance $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    public function getPalletTransporting(): NetshopPalletTransporting
    {
        return $this->palletTransporting;
    }

    public function setPalletTransporting(NetshopPalletTransporting $palletTransporting): self
    {
        $this->palletTransporting = $palletTransporting;

        return $this;
    }
}
