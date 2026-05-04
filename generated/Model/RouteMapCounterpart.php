<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpart
{
    /**
     * Тип контрагента (1 - юридическое лицо, 2 - ИП, 3 - физическое лицо)
     *
     * @var float|null
     */
    protected $form;
    /**
     * 
     *
     * @var RouteMapCounterpartLegalPerson
     */
    protected $legalPerson;
    /**
     * Наименование юр.лица/ИП или имя физ.лица
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var RouteMapCounterpartPrivatePerson
     */
    protected $privatePerson;
    /**
     * Тип контрагента (1 - юридическое лицо, 2 - ИП, 3 - физическое лицо)
     *
     * @return float|null
     */
    public function getForm() : ?float
    {
        return $this->form;
    }
    /**
     * Тип контрагента (1 - юридическое лицо, 2 - ИП, 3 - физическое лицо)
     *
     * @param float|null $form
     *
     * @return self
     */
    public function setForm(?float $form) : self
    {
        $this->form = $form;
        return $this;
    }
    /**
     * 
     *
     * @return RouteMapCounterpartLegalPerson
     */
    public function getLegalPerson() : RouteMapCounterpartLegalPerson
    {
        return $this->legalPerson;
    }
    /**
     * 
     *
     * @param RouteMapCounterpartLegalPerson $legalPerson
     *
     * @return self
     */
    public function setLegalPerson(RouteMapCounterpartLegalPerson $legalPerson) : self
    {
        $this->legalPerson = $legalPerson;
        return $this;
    }
    /**
     * Наименование юр.лица/ИП или имя физ.лица
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Наименование юр.лица/ИП или имя физ.лица
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
     * @return RouteMapCounterpartPrivatePerson
     */
    public function getPrivatePerson() : RouteMapCounterpartPrivatePerson
    {
        return $this->privatePerson;
    }
    /**
     * 
     *
     * @param RouteMapCounterpartPrivatePerson $privatePerson
     *
     * @return self
     */
    public function setPrivatePerson(RouteMapCounterpartPrivatePerson $privatePerson) : self
    {
        $this->privatePerson = $privatePerson;
        return $this;
    }
}