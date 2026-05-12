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
     * блок выводится, если контрагент юр.лицо или ИП
     *
     * @var RouteMapCounterpartLegalPerson|null
     */
    protected $legalPerson;
    /**
     * Наименование юр.лица/ИП или имя физ.лица
     *
     * @var string|null
     */
    protected $name;
    /**
     * блок выводится, если контрагент - физичекое лицо. В противном случае блок не выводится
     *
     * @var RouteMapCounterpartPrivatePerson|null
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
     * блок выводится, если контрагент юр.лицо или ИП
     *
     * @return RouteMapCounterpartLegalPerson|null
     */
    public function getLegalPerson() : ?RouteMapCounterpartLegalPerson
    {
        return $this->legalPerson;
    }
    /**
     * блок выводится, если контрагент юр.лицо или ИП
     *
     * @param RouteMapCounterpartLegalPerson|null $legalPerson
     *
     * @return self
     */
    public function setLegalPerson(?RouteMapCounterpartLegalPerson $legalPerson) : self
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
     * блок выводится, если контрагент - физичекое лицо. В противном случае блок не выводится
     *
     * @return RouteMapCounterpartPrivatePerson|null
     */
    public function getPrivatePerson() : ?RouteMapCounterpartPrivatePerson
    {
        return $this->privatePerson;
    }
    /**
     * блок выводится, если контрагент - физичекое лицо. В противном случае блок не выводится
     *
     * @param RouteMapCounterpartPrivatePerson|null $privatePerson
     *
     * @return self
     */
    public function setPrivatePerson(?RouteMapCounterpartPrivatePerson $privatePerson) : self
    {
        $this->privatePerson = $privatePerson;
        return $this;
    }
}