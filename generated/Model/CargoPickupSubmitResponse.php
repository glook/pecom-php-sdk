<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupSubmitResponse
{
    /**
     * @var CargoItem[]
     */
    protected $cargos;

    /**
     * @var null|string
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
     * @var null|string[]
     */
    protected $notifications;

    /**
     * @var CargoPickupSenderResponse
     */
    protected $sender;

    /**
     * @return CargoItem[]
     */
    public function getCargos(): array
    {
        return $this->cargos;
    }

    /**
     * @param CargoItem[] $cargos
     */
    public function setCargos(array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }

    public function getCustomerCorrelation(): ?string
    {
        return $this->customerCorrelation;
    }

    public function setCustomerCorrelation(?string $customerCorrelation): self
    {
        $this->customerCorrelation = $customerCorrelation;

        return $this;
    }

    /**
     * Номер заявки
     */
    public function getDocumentId(): int
    {
        return $this->documentId;
    }

    /**
     * Номер заявки
     */
    public function setDocumentId(int $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость
     *
     * @return null|string[]
     */
    public function getNotifications(): ?array
    {
        return $this->notifications;
    }

    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость
     *
     * @param null|string[] $notifications
     */
    public function setNotifications(?array $notifications): self
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getSender(): CargoPickupSenderResponse
    {
        return $this->sender;
    }

    public function setSender(CargoPickupSenderResponse $sender): self
    {
        $this->sender = $sender;

        return $this;
    }
}
