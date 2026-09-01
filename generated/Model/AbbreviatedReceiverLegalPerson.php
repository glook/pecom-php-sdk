<?php

namespace glook\PecomSdk\Generated\Model;

class AbbreviatedReceiverLegalPerson
{
    /**
     * Последние 2 цифры ИНН получателя
     *
     * @var null|string
     */
    protected $inn;

    /**
     * Послдение 2 цифры КПП получателя (для ИП пустое)
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * Последние 2 цифры ИНН получателя
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * Последние 2 цифры ИНН получателя
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Послдение 2 цифры КПП получателя (для ИП пустое)
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * Послдение 2 цифры КПП получателя (для ИП пустое)
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }
}
