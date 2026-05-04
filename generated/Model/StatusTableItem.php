<?php

namespace glook\PecomSdk\Generated\Model;

class StatusTableItem
{
    /**
     * идентификатор статуса, уникальный
     *
     * @var int|null
     */
    protected $id;
    /**
     * признак того, что данный статус является конечным. `true` означает, что статус конечный
     *
     * @var bool|null
     */
    protected $isFinal;
    /**
     * наименование статуса груза
     *
     * @var string|null
     */
    protected $name;
    /**
     * клиентский идентификатор статуса груза, неуникален, служит для ориентации по жизненному циклу перевозки груза
     *
     * @var int|null
     */
    protected $statusId;
    /**
     * `cargo` — статусы по перевозке груза, `pickup` — статусы заявки на забор
     *
     * @var string|null
     */
    protected $typeId;
    /**
     * идентификатор статуса, уникальный
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * идентификатор статуса, уникальный
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * признак того, что данный статус является конечным. `true` означает, что статус конечный
     *
     * @return bool|null
     */
    public function getIsFinal() : ?bool
    {
        return $this->isFinal;
    }
    /**
     * признак того, что данный статус является конечным. `true` означает, что статус конечный
     *
     * @param bool|null $isFinal
     *
     * @return self
     */
    public function setIsFinal(?bool $isFinal) : self
    {
        $this->isFinal = $isFinal;
        return $this;
    }
    /**
     * наименование статуса груза
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * наименование статуса груза
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * клиентский идентификатор статуса груза, неуникален, служит для ориентации по жизненному циклу перевозки груза
     *
     * @return int|null
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     * клиентский идентификатор статуса груза, неуникален, служит для ориентации по жизненному циклу перевозки груза
     *
     * @param int|null $statusId
     *
     * @return self
     */
    public function setStatusId(?int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * `cargo` — статусы по перевозке груза, `pickup` — статусы заявки на забор
     *
     * @return string|null
     */
    public function getTypeId() : ?string
    {
        return $this->typeId;
    }
    /**
     * `cargo` — статусы по перевозке груза, `pickup` — статусы заявки на забор
     *
     * @param string|null $typeId
     *
     * @return self
     */
    public function setTypeId(?string $typeId) : self
    {
        $this->typeId = $typeId;
        return $this;
    }
}