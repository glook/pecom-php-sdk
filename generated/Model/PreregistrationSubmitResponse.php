<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponse
{
    /**
     * 
     *
     * @var PreregistrationSubmitResponseCargo[]
     */
    protected $cargos;
    /**
     * Номер заявки
     *
     * @var int
     */
    protected $documentId;
    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость перевозки.
     *
     * @var string[]|null
     */
    protected $notifications;
    /**
     * 
     *
     * @var PreregistrationSubmitResponseSender
     */
    protected $sender;
    /**
     * 
     *
     * @return PreregistrationSubmitResponseCargo[]
     */
    public function getCargos() : array
    {
        return $this->cargos;
    }
    /**
     * 
     *
     * @param PreregistrationSubmitResponseCargo[] $cargos
     *
     * @return self
     */
    public function setCargos(array $cargos) : self
    {
        $this->cargos = $cargos;
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
     * Важные оповещения, которые могут повлиять на сроки/стоимость перевозки.
     *
     * @return string[]|null
     */
    public function getNotifications() : ?array
    {
        return $this->notifications;
    }
    /**
     * Важные оповещения, которые могут повлиять на сроки/стоимость перевозки.
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
     * @return PreregistrationSubmitResponseSender
     */
    public function getSender() : PreregistrationSubmitResponseSender
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param PreregistrationSubmitResponseSender $sender
     *
     * @return self
     */
    public function setSender(PreregistrationSubmitResponseSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
}