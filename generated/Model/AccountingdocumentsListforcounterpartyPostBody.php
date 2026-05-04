<?php

namespace glook\PecomSdk\Generated\Model;

class AccountingdocumentsListforcounterpartyPostBody
{
    /**
     * Идентификатор филиала, по которому запрашиваются документы. Можно получить в ответе метода [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].id`
     *
     * @var string
     */
    protected $branchId;
    /**
     * Дата и время начала запрашиваемого периода
     *
     * @var string
     */
    protected $dateBegin;
    /**
     * Дата и время конца запрашиваемого периода
     *
     * @var string
     */
    protected $dateEnd;
    /**
     * ИНН плательщика
     *
     * @var string
     */
    protected $iNN;
    /**
     * КПП плательщика
     *
     * @var string|null
     */
    protected $kPP;
    /**
     * Токен для авторизации. Получается методом [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     *
     * @var string
     */
    protected $token;
    /**
     * Идентификатор филиала, по которому запрашиваются документы. Можно получить в ответе метода [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].id`
     *
     * @return string
     */
    public function getBranchId() : string
    {
        return $this->branchId;
    }
    /**
     * Идентификатор филиала, по которому запрашиваются документы. Можно получить в ответе метода [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].id`
     *
     * @param string $branchId
     *
     * @return self
     */
    public function setBranchId(string $branchId) : self
    {
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * Дата и время начала запрашиваемого периода
     *
     * @return string
     */
    public function getDateBegin() : string
    {
        return $this->dateBegin;
    }
    /**
     * Дата и время начала запрашиваемого периода
     *
     * @param string $dateBegin
     *
     * @return self
     */
    public function setDateBegin(string $dateBegin) : self
    {
        $this->dateBegin = $dateBegin;
        return $this;
    }
    /**
     * Дата и время конца запрашиваемого периода
     *
     * @return string
     */
    public function getDateEnd() : string
    {
        return $this->dateEnd;
    }
    /**
     * Дата и время конца запрашиваемого периода
     *
     * @param string $dateEnd
     *
     * @return self
     */
    public function setDateEnd(string $dateEnd) : self
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }
    /**
     * ИНН плательщика
     *
     * @return string
     */
    public function getINN() : string
    {
        return $this->iNN;
    }
    /**
     * ИНН плательщика
     *
     * @param string $iNN
     *
     * @return self
     */
    public function setINN(string $iNN) : self
    {
        $this->iNN = $iNN;
        return $this;
    }
    /**
     * КПП плательщика
     *
     * @return string|null
     */
    public function getKPP() : ?string
    {
        return $this->kPP;
    }
    /**
     * КПП плательщика
     *
     * @param string|null $kPP
     *
     * @return self
     */
    public function setKPP(?string $kPP) : self
    {
        $this->kPP = $kPP;
        return $this;
    }
    /**
     * Токен для авторизации. Получается методом [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * Токен для авторизации. Получается методом [`/auth/createtokentoaccessprivatedata/`](#tag/auth/POST/auth/createtokentoaccessprivatedata/)
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        return $this;
    }
}