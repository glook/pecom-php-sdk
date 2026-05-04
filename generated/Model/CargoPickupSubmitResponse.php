<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupSubmitResponse
{
    /**
     * 
     *
     * @var CargoItem[]
     */
    protected $cargos;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerCorrelation;
    /**
     * Номер заявки
     *
     * @var int
     */
    protected $documentId;
    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость
     *
     * @var string[]|null
     */
    protected $notifications;
    /**
     * 
     *
     * @var CargoPickupSenderResponse
     */
    protected $sender;
    /**
     * 
     *
     * @return CargoItem[]
     */
    public function getCargos() : array
    {
        return $this->cargos;
    }
    /**
     * 
     *
     * @param CargoItem[] $cargos
     *
     * @return self
     */
    public function setCargos(array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerCorrelation() : ?string
    {
        return $this->customerCorrelation;
    }
    /**
     * 
     *
     * @param string|null $customerCorrelation
     *
     * @return self
     */
    public function setCustomerCorrelation(?string $customerCorrelation) : self
    {
        $this->customerCorrelation = $customerCorrelation;
        return $this;
    }
    /**
     * Номер заявки
     *
     * @return int
     */
    public function getDocumentId() : int
    {
        return $this->documentId;
    }
    /**
     * Номер заявки
     *
     * @param int $documentId
     *
     * @return self
     */
    public function setDocumentId(int $documentId) : self
    {
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость
     *
     * @return string[]|null
     */
    public function getNotifications() : ?array
    {
        return $this->notifications;
    }
    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость
     *
     * @param string[]|null $notifications
     *
     * @return self
     */
    public function setNotifications(?array $notifications) : self
    {
        $this->notifications = $notifications;
        return $this;
    }
    /**
     * 
     *
     * @return CargoPickupSenderResponse
     */
    public function getSender() : CargoPickupSenderResponse
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param CargoPickupSenderResponse $sender
     *
     * @return self
     */
    public function setSender(CargoPickupSenderResponse $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
}