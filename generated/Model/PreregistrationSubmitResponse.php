<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponse
{
    /**
     * @var PreregistrationSubmitResponseCargo[]
     */
    protected $cargos;

    /**
     * Номер заявки.
     *
     * @var int
     */
    protected $documentId;

    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость перевозки.
     *
     * @var null|string[]
     */
    protected $notifications;

    /**
     * @var PreregistrationSubmitResponseSender
     */
    protected $sender;

    /**
     * @return PreregistrationSubmitResponseCargo[]
     */
    public function getCargos(): array
    {
        return $this->cargos;
    }

    /**
     * @param PreregistrationSubmitResponseCargo[] $cargos
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

    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость перевозки.
     *
     * @return null|string[]
     */
    public function getNotifications(): ?array
    {
        return $this->notifications;
    }

    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость перевозки.
     *
     * @param null|string[] $notifications
     */
    public function setNotifications(?array $notifications): self
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function getSender(): PreregistrationSubmitResponseSender
    {
        return $this->sender;
    }

    public function setSender(PreregistrationSubmitResponseSender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }
}
