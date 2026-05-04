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
     *
     * @return SuggestAddressResponseResponse
     */
    public function getResponse() : SuggestAddressResponseResponse
    {
        return $this->response;
    }
    /**
     * Ответ геокодера
     *
     * @param SuggestAddressResponseResponse $response
     *
     * @return self
     */
    public function setResponse(SuggestAddressResponseResponse $response) : self
    {
        $this->response = $response;
        return $this;
    }
}