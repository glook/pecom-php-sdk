<?php

namespace glook\PecomSdk\Generated\Model;

class Country
{
    /**
     * Код страны по общероссийскому классификатору
     *
     * @var string
     */
    protected $codeByClassifier;
    /**
     * Наименование страны
     *
     * @var string
     */
    protected $name;
    /**
     * Краткое наименование страны
     *
     * @var string
     */
    protected $shortName;
    /**
     * Код страны по общероссийскому классификатору
     *
     * @return string
     */
    public function getCodeByClassifier() : string
    {
        return $this->codeByClassifier;
    }
    /**
     * Код страны по общероссийскому классификатору
     *
     * @param string $codeByClassifier
     *
     * @return self
     */
    public function setCodeByClassifier(string $codeByClassifier) : self
    {
        $this->codeByClassifier = $codeByClassifier;
        return $this;
    }
    /**
     * Наименование страны
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Наименование страны
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Краткое наименование страны
     *
     * @return string
     */
    public function getShortName() : string
    {
        return $this->shortName;
    }
    /**
     * Краткое наименование страны
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName) : self
    {
        $this->shortName = $shortName;
        return $this;
    }
}