<?php

namespace glook\PecomSdk\Generated\Model;

class CounterpartsSpecialCondition
{
    /**
     * Наименование доп.соглашения/сервиса/скидки
     *
     * @var string
     */
    protected $title;

    /**
     * UID соглашения/сервиса/скидки
     *
     * @var string
     */
    protected $uID;

    /**
     * Наименование доп.соглашения/сервиса/скидки
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование доп.соглашения/сервиса/скидки
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * UID соглашения/сервиса/скидки
     */
    public function getUID(): string
    {
        return $this->uID;
    }

    /**
     * UID соглашения/сервиса/скидки
     */
    public function setUID(string $uID): self
    {
        $this->uID = $uID;

        return $this;
    }
}
