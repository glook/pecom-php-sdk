<?php

namespace glook\PecomSdk\Generated\Model;

class StatusHistoryStatus
{
    /**
     * Дата и время статуса
     *
     * @var string|null
     */
    protected $date;
    /**
     * id статуса груза
     *
     * @var int|null
     */
    protected $id;
    /**
     * Признак того, что статус был выставлен, а позднее отменен. Т.е. учетная операция, изменившая статус, в настоящее время отменена.
     *
     * @var bool|null
     */
    protected $isCancel;
    /**
     * Признак того, что данный статус является конечным. Внимание! Может быть ошибочным и позднее отменен.
     *
     * @var bool|null
     */
    protected $isFinal;
    /**
     * Статус груза
     *
     * @var string|null
     */
    protected $name;
    /**
     * Дата и время статуса
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * Дата и время статуса
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * id статуса груза
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * id статуса груза
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
     * Признак того, что статус был выставлен, а позднее отменен. Т.е. учетная операция, изменившая статус, в настоящее время отменена.
     *
     * @return bool|null
     */
    public function getIsCancel() : ?bool
    {
        return $this->isCancel;
    }
    /**
     * Признак того, что статус был выставлен, а позднее отменен. Т.е. учетная операция, изменившая статус, в настоящее время отменена.
     *
     * @param bool|null $isCancel
     *
     * @return self
     */
    public function setIsCancel(?bool $isCancel) : self
    {
        $this->isCancel = $isCancel;
        return $this;
    }
    /**
     * Признак того, что данный статус является конечным. Внимание! Может быть ошибочным и позднее отменен.
     *
     * @return bool|null
     */
    public function getIsFinal() : ?bool
    {
        return $this->isFinal;
    }
    /**
     * Признак того, что данный статус является конечным. Внимание! Может быть ошибочным и позднее отменен.
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
     * Статус груза
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Статус груза
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
}