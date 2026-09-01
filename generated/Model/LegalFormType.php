<?php

namespace glook\PecomSdk\Generated\Model;

class LegalFormType
{
    /**
     * Наименование формы собственности
     *
     * @var string
     */
    protected $name;

    /**
     * Краткое наименование формы собственности
     *
     * @var string
     */
    protected $shortName;

    /**
     * Наименование формы собственности
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Наименование формы собственности
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Краткое наименование формы собственности
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * Краткое наименование формы собственности
     */
    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }
}
