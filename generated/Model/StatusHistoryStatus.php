<?php

namespace glook\PecomSdk\Generated\Model;

class StatusHistoryStatus
{
    /**
     * Дата и время статуса
     *
     * @var null|string
     */
    protected $date;

    /**
     * id статуса груза
     *
     * @var null|int
     */
    protected $id;

    /**
     * Признак того, что статус был выставлен, а позднее отменен. Т.е. учетная операция, изменившая статус, в настоящее время отменена.
     *
     * @var null|bool
     */
    protected $isCancel;

    /**
     * Признак того, что данный статус является конечным. Внимание! Может быть ошибочным и позднее отменен.
     *
     * @var null|bool
     */
    protected $isFinal;

    /**
     * Статус груза
     *
     * @var null|string
     */
    protected $name;

    /**
     * Дата и время статуса
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Дата и время статуса
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * id статуса груза
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * id статуса груза
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Признак того, что статус был выставлен, а позднее отменен. Т.е. учетная операция, изменившая статус, в настоящее время отменена.
     */
    public function getIsCancel(): ?bool
    {
        return $this->isCancel;
    }

    /**
     * Признак того, что статус был выставлен, а позднее отменен. Т.е. учетная операция, изменившая статус, в настоящее время отменена.
     */
    public function setIsCancel(?bool $isCancel): self
    {
        $this->isCancel = $isCancel;

        return $this;
    }

    /**
     * Признак того, что данный статус является конечным. Внимание! Может быть ошибочным и позднее отменен.
     */
    public function getIsFinal(): ?bool
    {
        return $this->isFinal;
    }

    /**
     * Признак того, что данный статус является конечным. Внимание! Может быть ошибочным и позднее отменен.
     */
    public function setIsFinal(?bool $isFinal): self
    {
        $this->isFinal = $isFinal;

        return $this;
    }

    /**
     * Статус груза
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Статус груза
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
