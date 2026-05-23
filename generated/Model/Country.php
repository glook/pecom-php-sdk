<?php

namespace glook\PecomSdk\Generated\Model;

class Country
{
    /**
     * Код страны по общероссийскому классификатору.
     *
     * @var string
     */
    protected $codeByClassifier;

    /**
     * Наименование страны.
     *
     * @var string
     */
    protected $name;

    /**
     * Краткое наименование страны.
     *
     * @var string
     */
    protected $shortName;

    /**
     * Код страны по общероссийскому классификатору.
     */
    public function getCodeByClassifier(): string
    {
        return $this->codeByClassifier;
    }

    /**
     * Код страны по общероссийскому классификатору.
     */
    public function setCodeByClassifier(string $codeByClassifier): self
    {
        $this->codeByClassifier = $codeByClassifier;

        return $this;
    }

    /**
     * Наименование страны.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Наименование страны.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Краткое наименование страны.
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * Краткое наименование страны.
     */
    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }
}
