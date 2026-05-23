<?php

namespace glook\PecomSdk\Generated\Model;

class Counterpart
{
    /**
     * Номер карты клиента.
     *
     * @var null|string
     */
    protected $counterpartClientCard;

    /**
     * ИНН контрагента.
     *
     * @var null|string
     */
    protected $inn;

    /**
     * КПП контрагента.
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * Роль заказчика перевозки. Кто производит расчет: 1 — отправитель, 2 — получатель, 3 — плательщик, 4 — не участник перевозки.
     *
     * @var null|float[]
     */
    protected $whoMakesCalculation;

    /**
     * Номер карты клиента.
     */
    public function getCounterpartClientCard(): ?string
    {
        return $this->counterpartClientCard;
    }

    /**
     * Номер карты клиента.
     */
    public function setCounterpartClientCard(?string $counterpartClientCard): self
    {
        $this->counterpartClientCard = $counterpartClientCard;

        return $this;
    }

    /**
     * ИНН контрагента.
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН контрагента.
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * КПП контрагента.
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * КПП контрагента.
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    /**
     * Роль заказчика перевозки. Кто производит расчет: 1 — отправитель, 2 — получатель, 3 — плательщик, 4 — не участник перевозки.
     *
     * @return null|float[]
     */
    public function getWhoMakesCalculation(): ?array
    {
        return $this->whoMakesCalculation;
    }

    /**
     * Роль заказчика перевозки. Кто производит расчет: 1 — отправитель, 2 — получатель, 3 — плательщик, 4 — не участник перевозки.
     *
     * @param null|float[] $whoMakesCalculation
     */
    public function setWhoMakesCalculation(?array $whoMakesCalculation): self
    {
        $this->whoMakesCalculation = $whoMakesCalculation;

        return $this;
    }
}
