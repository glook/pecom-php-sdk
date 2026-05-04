<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCommon
{
    /**
     * Планируемая дата забора груза
     *
     * @var \DateTime
     */
    protected $applicationDate;
    /**
     * Описание груза. Поле обязательно для заполнения, если не во всех грузах заявки проставлено описание груза (`cargos.items[].cargo.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @var string|null
     */
    protected $description;
    /**
     * ФИО ответственного за оформление заявки
     *
     * @var string|null
     */
    protected $responsiblePerson;
    /**
     * Планируемая дата забора груза
     *
     * @return \DateTime
     */
    public function getApplicationDate() : \DateTime
    {
        return $this->applicationDate;
    }
    /**
     * Планируемая дата забора груза
     *
     * @param \DateTime $applicationDate
     *
     * @return self
     */
    public function setApplicationDate(\DateTime $applicationDate) : self
    {
        $this->applicationDate = $applicationDate;
        return $this;
    }
    /**
     * Описание груза. Поле обязательно для заполнения, если не во всех грузах заявки проставлено описание груза (`cargos.items[].cargo.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Описание груза. Поле обязательно для заполнения, если не во всех грузах заявки проставлено описание груза (`cargos.items[].cargo.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * ФИО ответственного за оформление заявки
     *
     * @return string|null
     */
    public function getResponsiblePerson() : ?string
    {
        return $this->responsiblePerson;
    }
    /**
     * ФИО ответственного за оформление заявки
     *
     * @param string|null $responsiblePerson
     *
     * @return self
     */
    public function setResponsiblePerson(?string $responsiblePerson) : self
    {
        $this->responsiblePerson = $responsiblePerson;
        return $this;
    }
}