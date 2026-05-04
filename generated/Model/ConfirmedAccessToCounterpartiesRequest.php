<?php

namespace glook\PecomSdk\Generated\Model;

class ConfirmedAccessToCounterpartiesRequest
{
    /**
     * Токен для авторизации. Получается методом [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     *
     * @var string
     */
    protected $accessToken;
    /**
     * Токен для авторизации. Получается методом [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     *
     * @return string
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }
    /**
     * Токен для авторизации. Получается методом [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken) : self
    {
        $this->accessToken = $accessToken;
        return $this;
    }
}