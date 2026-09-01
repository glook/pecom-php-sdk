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
     * @var null|string
     */
    protected $description;

    /**
     * ФИО ответственного за оформление заявки
     *
     * @var null|string
     */
    protected $responsiblePerson;

    /**
     * Планируемая дата забора груза
     */
    public function getApplicationDate(): \DateTime
    {
        return $this->applicationDate;
    }

    /**
     * Планируемая дата забора груза
     */
    public function setApplicationDate(\DateTime $applicationDate): self
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    /**
     * Описание груза. Поле обязательно для заполнения, если не во всех грузах заявки проставлено описание груза (`cargos.items[].cargo.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Описание груза. Поле обязательно для заполнения, если не во всех грузах заявки проставлено описание груза (`cargos.items[].cargo.description`). Значение необходимо выбрать из ответа метода [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * ФИО ответственного за оформление заявки
     */
    public function getResponsiblePerson(): ?string
    {
        return $this->responsiblePerson;
    }

    /**
     * ФИО ответственного за оформление заявки
     */
    public function setResponsiblePerson(?string $responsiblePerson): self
    {
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }
}
