<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesSpecialCondition
{
    /**
     * Наименование услуги
     *
     * @var string
     */
    protected $title;
    /**
     * Соглашение UID. Если есть в ответе, значит услуга может оказываться для указанного направления
     *
     * @var string
     */
    protected $uID;
    /**
     * Наименование услуги
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование услуги
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Соглашение UID. Если есть в ответе, значит услуга может оказываться для указанного направления
     *
     * @return string
     */
    public function getUID() : string
    {
        return $this->uID;
    }
    /**
     * Соглашение UID. Если есть в ответе, значит услуга может оказываться для указанного направления
     *
     * @param string $uID
     *
     * @return self
     */
    public function setUID(string $uID) : self
    {
        $this->uID = $uID;
        return $this;
    }
}