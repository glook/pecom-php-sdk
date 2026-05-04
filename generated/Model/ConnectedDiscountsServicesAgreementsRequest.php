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
     *
     * @return string
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }
    /**
     * Токен для авторизации. Обязательный. См. метод [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
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
    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Обязательный. См. метод [`/counterparts/confirmedaccesstocounterparties/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     *
     * @return string
     */
    public function getCounterpartGUID() : string
    {
        return $this->counterpartGUID;
    }
    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Обязательный. См. метод [`/counterparts/confirmedaccesstocounterparties/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     *
     * @param string $counterpartGUID
     *
     * @return self
     */
    public function setCounterpartGUID(string $counterpartGUID) : self
    {
        $this->counterpartGUID = $counterpartGUID;
        return $this;
    }
}