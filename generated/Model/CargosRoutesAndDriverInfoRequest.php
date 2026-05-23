<?php

namespace glook\PecomSdk\Generated\Model;

class CargosRoutesAndDriverInfoRequest
{
    /**
     * Полный адрес, включая название населенного пункта.
     *
     * @var string
     */
    protected $cityFullAddress;

    /**
     * Дата выполнения операции забора/доставки груза.
     *
     * @var \DateTime
     */
    protected $dateRoute;

    /**
     * Полный адрес, включая название населенного пункта.
     */
    public function getCityFullAddress(): string
    {
        return $this->cityFullAddress;
    }

    /**
     * Полный адрес, включая название населенного пункта.
     */
    public function setCityFullAddress(string $cityFullAddress): self
    {
        $this->cityFullAddress = $cityFullAddress;

        return $this;
    }

    /**
     * Дата выполнения операции забора/доставки груза.
     */
    public function getDateRoute(): \DateTime
    {
        return $this->dateRoute;
    }

    /**
     * Дата выполнения операции забора/доставки груза.
     */
    public function setDateRoute(\DateTime $dateRoute): self
    {
        $this->dateRoute = $dateRoute;

        return $this;
    }
}
