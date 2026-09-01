<?php

namespace glook\PecomSdk\Generated\Model;

class ConnectedDiscountsServicesAgreementsRequest
{
    /**
     * Токен для авторизации. Обязательный. См. метод [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Обязательный. См. метод [`/counterparts/confirmedaccesstocounterparties/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     *
     * @var string
     */
    protected $counterpartGUID;

    /**
     * Токен для авторизации. Обязательный. См. метод [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Токен для авторизации. Обязательный. См. метод [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Обязательный. См. метод [`/counterparts/confirmedaccesstocounterparties/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     */
    public function getCounterpartGUID(): string
    {
        return $this->counterpartGUID;
    }

    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Обязательный. См. метод [`/counterparts/confirmedaccesstocounterparties/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     */
    public function setCounterpartGUID(string $counterpartGUID): self
    {
        $this->counterpartGUID = $counterpartGUID;

        return $this;
    }
}
