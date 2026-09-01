<?php

namespace glook\PecomSdk\Generated\Model;

class SuggestAddressResponse
{
    /**
     * Ответ геокодера
     *
     * @var SuggestAddressResponseResponse
     */
    protected $response;

    /**
     * Ответ геокодера
     */
    public function getResponse(): SuggestAddressResponseResponse
    {
        return $this->response;
    }

    /**
     * Ответ геокодера
     */
    public function setResponse(SuggestAddressResponseResponse $response): self
    {
        $this->response = $response;

        return $this;
    }
}
