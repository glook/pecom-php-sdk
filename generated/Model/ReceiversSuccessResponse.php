<?php

namespace glook\PecomSdk\Generated\Model;

class ReceiversSuccessResponse
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var bool
     */
    protected $success;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): self
    {
        $this->success = $success;

        return $this;
    }
}
