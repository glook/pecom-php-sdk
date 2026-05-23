<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderSenderCounterpart
{
    /**
     * Блок для юр.лица/ИП
     *
     * @var null|ListAllOrderCounterpartLegalEntity
     */
    protected $legalEntity;

    /**
     * Наименование/ФИО.
     *
     * @var null|string
     */
    protected $name;

    /**
     * Блок для физ.лица.
     *
     * @var null|ListAllOrderSenderCounterpartPhysicalPerson
     */
    protected $physicalPerson;

    /**
     * Тип контрагента: 0 - юр.лицо/ИП, 1 - физическое лицо.
     *
     * @var null|int
     */
    protected $type;

    /**
     * Блок для юр.лица/ИП
     */
    public function getLegalEntity(): ?ListAllOrderCounterpartLegalEntity
    {
        return $this->legalEntity;
    }

    /**
     * Блок для юр.лица/ИП
     */
    public function setLegalEntity(?ListAllOrderCounterpartLegalEntity $legalEntity): self
    {
        $this->legalEntity = $legalEntity;

        return $this;
    }

    /**
     * Наименование/ФИО.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Наименование/ФИО.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Блок для физ.лица.
     */
    public function getPhysicalPerson(): ?ListAllOrderSenderCounterpartPhysicalPerson
    {
        return $this->physicalPerson;
    }

    /**
     * Блок для физ.лица.
     */
    public function setPhysicalPerson(?ListAllOrderSenderCounterpartPhysicalPerson $physicalPerson): self
    {
        $this->physicalPerson = $physicalPerson;

        return $this;
    }

    /**
     * Тип контрагента: 0 - юр.лицо/ИП, 1 - физическое лицо.
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * Тип контрагента: 0 - юр.лицо/ИП, 1 - физическое лицо.
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
