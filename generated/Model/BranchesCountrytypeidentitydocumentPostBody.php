<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesCountrytypeidentitydocumentPostBody
{
    /**
     * Код страны по общероссийскому классификатору.
     * Можно получить методом [`/branches/country/`](#tag/branches/POST/branches/country/).
     *
     * @var string
     */
    protected $codeByClassifier;

    /**
     * Код страны по общероссийскому классификатору.
     * Можно получить методом [`/branches/country/`](#tag/branches/POST/branches/country/).
     */
    public function getCodeByClassifier(): string
    {
        return $this->codeByClassifier;
    }

    /**
     * Код страны по общероссийскому классификатору.
     * Можно получить методом [`/branches/country/`](#tag/branches/POST/branches/country/).
     */
    public function setCodeByClassifier(string $codeByClassifier): self
    {
        $this->codeByClassifier = $codeByClassifier;

        return $this;
    }
}
