<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderReceiverCounterpart
{
    /**
     * Блок для юр.лица/ИП
     *
     * @var ListAllOrderCounterpartLegalEntity|null
     */
    protected $legalEntity;
    /**
     * Наименование/ФИО
     *
     * @var string|null
     */
    protected $name;
    /**
     * Блок для физ.лица
     *
     * @var ListAllOrderReceiverCounterpartPhysicalPerson|null
     */
    protected $physicalPerson;
    /**
     * Тип контрагента: 0 - юр.лицо/ИП, 1 - физическое лицо
     *
     * @var int|null
     */
    protected $type;
    /**
     * Блок для юр.лица/ИП
     *
     * @return ListAllOrderCounterpartLegalEntity|null
     */
    public function getLegalEntity() : ?ListAllOrderCounterpartLegalEntity
    {
        return $this->legalEntity;
    }
    /**
     * Блок для юр.лица/ИП
     *
     * @param ListAllOrderCounterpartLegalEntity|null $legalEntity
     *
     * @return self
     */
    public function setLegalEntity(?ListAllOrderCounterpartLegalEntity $legalEntity) : self
    {
        $this->legalEntity = $legalEntity;
        return $this;
    }
    /**
     * Наименование/ФИО
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Наименование/ФИО
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
     * Блок для физ.лица
     *
     * @return ListAllOrderReceiverCounterpartPhysicalPerson|null
     */
    public function getPhysicalPerson() : ?ListAllOrderReceiverCounterpartPhysicalPerson
    {
        return $this->physicalPerson;
    }
    /**
     * Блок для физ.лица
     *
     * @param ListAllOrderReceiverCounterpartPhysicalPerson|null $physicalPerson
     *
     * @return self
     */
    public function setPhysicalPerson(?ListAllOrderReceiverCounterpartPhysicalPerson $physicalPerson) : self
    {
        $this->physicalPerson = $physicalPerson;
        return $this;
    }
    /**
     * Тип контрагента: 0 - юр.лицо/ИП, 1 - физическое лицо
     *
     * @return int|null
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Тип контрагента: 0 - юр.лицо/ИП, 1 - физическое лицо
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}