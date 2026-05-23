<?php

namespace glook\PecomSdk\Generated\Model;

class ReceiversListResponse
{
    /**
     * @var Receiver[]
     */
    protected $receivers;

    /**
     * @return Receiver[]
     */
    public function getReceivers(): array
    {
        return $this->receivers;
    }

    /**
     * @param Receiver[] $receivers
     */
    public function setReceivers(array $receivers): self
    {
        $this->receivers = $receivers;

        return $this;
    }
}
