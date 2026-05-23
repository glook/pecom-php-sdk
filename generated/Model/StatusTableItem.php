<?php

namespace glook\PecomSdk\Generated\Model;

class StatusTableItem
{
    /**
     * идентификатор статуса, уникальный.
     *
     * @var null|int
     */
    protected $id;

    /**
     * признак того, что данный статус является конечным. `true` означает, что статус конечный.
     *
     * @var null|bool
     */
    protected $isFinal;

    /**
     * наименование статуса груза.
     *
     * @var null|string
     */
    protected $name;

    /**
     * клиентский идентификатор статуса груза, неуникален, служит для ориентации по жизненному циклу перевозки груза.
     *
     * @var null|int
     */
    protected $statusId;

    /**
     * `cargo` — статусы по перевозке груза, `pickup` — статусы заявки на забор
     *
     * @var null|string
     */
    protected $typeId;

    /**
     * идентификатор статуса, уникальный.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * идентификатор статуса, уникальный.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * признак того, что данный статус является конечным. `true` означает, что статус конечный.
     */
    public function getIsFinal(): ?bool
    {
        return $this->isFinal;
    }

    /**
     * признак того, что данный статус является конечным. `true` означает, что статус конечный.
     */
    public function setIsFinal(?bool $isFinal): self
    {
        $this->isFinal = $isFinal;

        return $this;
    }

    /**
     * наименование статуса груза.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * наименование статуса груза.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * клиентский идентификатор статуса груза, неуникален, служит для ориентации по жизненному циклу перевозки груза.
     */
    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    /**
     * клиентский идентификатор статуса груза, неуникален, служит для ориентации по жизненному циклу перевозки груза.
     */
    public function setStatusId(?int $statusId): self
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * `cargo` — статусы по перевозке груза, `pickup` — статусы заявки на забор
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }

    /**
     * `cargo` — статусы по перевозке груза, `pickup` — статусы заявки на забор
     */
    public function setTypeId(?string $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }
}
