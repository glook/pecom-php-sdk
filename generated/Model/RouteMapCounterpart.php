<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpart
{
    /**
     * Тип контрагента (1 - юридическое лицо, 2 - ИП, 3 - физическое лицо).
     *
     * @var null|float
     */
    protected $form;

    /**
     * блок выводится, если контрагент юр.лицо или ИП
     *
     * @var null|RouteMapCounterpartLegalPerson
     */
    protected $legalPerson;

    /**
     * Наименование юр.лица/ИП или имя физ.лица.
     *
     * @var null|string
     */
    protected $name;

    /**
     * блок выводится, если контрагент - физичекое лицо. В противном случае блок не выводится.
     *
     * @var null|RouteMapCounterpartPrivatePerson
     */
    protected $privatePerson;

    /**
     * Тип контрагента (1 - юридическое лицо, 2 - ИП, 3 - физическое лицо).
     */
    public function getForm(): ?float
    {
        return $this->form;
    }

    /**
     * Тип контрагента (1 - юридическое лицо, 2 - ИП, 3 - физическое лицо).
     */
    public function setForm(?float $form): self
    {
        $this->form = $form;

        return $this;
    }

    /**
     * блок выводится, если контрагент юр.лицо или ИП
     */
    public function getLegalPerson(): ?RouteMapCounterpartLegalPerson
    {
        return $this->legalPerson;
    }

    /**
     * блок выводится, если контрагент юр.лицо или ИП
     */
    public function setLegalPerson(?RouteMapCounterpartLegalPerson $legalPerson): self
    {
        $this->legalPerson = $legalPerson;

        return $this;
    }

    /**
     * Наименование юр.лица/ИП или имя физ.лица.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Наименование юр.лица/ИП или имя физ.лица.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * блок выводится, если контрагент - физичекое лицо. В противном случае блок не выводится.
     */
    public function getPrivatePerson(): ?RouteMapCounterpartPrivatePerson
    {
        return $this->privatePerson;
    }

    /**
     * блок выводится, если контрагент - физичекое лицо. В противном случае блок не выводится.
     */
    public function setPrivatePerson(?RouteMapCounterpartPrivatePerson $privatePerson): self
    {
        $this->privatePerson = $privatePerson;

        return $this;
    }
}
