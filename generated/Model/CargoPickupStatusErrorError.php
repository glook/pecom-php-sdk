<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupStatusErrorError
{
    /**
     * @var null|mixed
     */
    protected $error;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var string
     */
    protected $title;

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
