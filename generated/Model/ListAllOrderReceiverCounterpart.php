<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderReceiverCounterpart
{
    /**
     * 
     *
     * @var ListAllOrderCounterpartLegalEntity
     */
    protected $legalEntity;
    /**
     * Наименование/ФИО
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var ListAllOrderReceiverCounterpartPhysicalPerson
     */
    protected $physicalPerson;
    /**
     * Тип контрагента: 0 - юр.лицо/ИП, 1 - физическое лицо
     *
     * @var int|null
     */
    protected $type;
    /**
     * 
     *
     * @return ListAllOrderCounterpartLegalEntity
     */
    public function getLegalEntity() : ListAllOrderCounterpartLegalEntity
    {
        return $this->legalEntity;
    }
    /**
     * 
     *
     * @param ListAllOrderCounterpartLegalEntity $legalEntity
     *
     * @return self
     */
    public function setLegalEntity(ListAllOrderCounterpartLegalEntity $legalEntity) : self
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
     * 
     *
     * @return ListAllOrderReceiverCounterpartPhysicalPerson
     */
    public function getPhysicalPerson() : ListAllOrderReceiverCounterpartPhysicalPerson
    {
        return $this->physicalPerson;
    }
    /**
     * 
     *
     * @param ListAllOrderReceiverCounterpartPhysicalPerson $physicalPerson
     *
     * @return self
     */
    public function setPhysicalPerson(ListAllOrderReceiverCounterpartPhysicalPerson $physicalPerson) : self
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