<?php

namespace glook\PecomSdk\Generated\Model;

class NotificationCargoSubscribeResponse
{
    /**
     * Успешность подписки.
     *
     * @var bool
     */
    protected $success;

    /**
     * Успешность подписки.
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * Успешность подписки.
     */
    public function setSuccess(bool $success): self
    {
        $this->success = $success;

        return $this;
    }
}
