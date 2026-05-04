<?php

namespace glook\PecomSdk\Generated\Model;

class AbbreviatedReceiverLegalPerson
{
    /**
     * Последние 2 цифры ИНН получателя
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Послдение 2 цифры КПП получателя (для ИП пустое)
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * Последние 2 цифры ИНН получателя
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * Последние 2 цифры ИНН получателя
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn) : self
    {
        $this->inn = $inn;
        return $this;
    }
    /**
     * Послдение 2 цифры КПП получателя (для ИП пустое)
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * Послдение 2 цифры КПП получателя (для ИП пустое)
     *
     * @param string|null $kpp
     *
     * @return self
     */
    public function setKpp(?string $kpp) : self
    {
        $this->kpp = $kpp;
        return $this;
    }
}