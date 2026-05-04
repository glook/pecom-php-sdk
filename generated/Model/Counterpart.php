<?php

namespace glook\PecomSdk\Generated\Model;

class Counterpart
{
    /**
     * Номер карты клиента
     *
     * @var string|null
     */
    protected $counterpartClientCard;
    /**
     * ИНН контрагента
     *
     * @var string|null
     */
    protected $inn;
    /**
     * КПП контрагента
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * Роль заказчика перевозки. Кто производит расчет: 1 — отправитель, 2 — получатель, 3 — плательщик, 4 — не участник перевозки
     *
     * @var float[]|null
     */
    protected $whoMakesCalculation;
    /**
     * Номер карты клиента
     *
     * @return string|null
     */
    public function getCounterpartClientCard() : ?string
    {
        return $this->counterpartClientCard;
    }
    /**
     * Номер карты клиента
     *
     * @param string|null $counterpartClientCard
     *
     * @return self
     */
    public function setCounterpartClientCard(?string $counterpartClientCard) : self
    {
        $this->counterpartClientCard = $counterpartClientCard;
        return $this;
    }
    /**
     * ИНН контрагента
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН контрагента
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
     * КПП контрагента
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * КПП контрагента
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
    /**
     * Роль заказчика перевозки. Кто производит расчет: 1 — отправитель, 2 — получатель, 3 — плательщик, 4 — не участник перевозки
     *
     * @return float[]|null
     */
    public function getWhoMakesCalculation() : ?array
    {
        return $this->whoMakesCalculation;
    }
    /**
     * Роль заказчика перевозки. Кто производит расчет: 1 — отправитель, 2 — получатель, 3 — плательщик, 4 — не участник перевозки
     *
     * @param float[]|null $whoMakesCalculation
     *
     * @return self
     */
    public function setWhoMakesCalculation(?array $whoMakesCalculation) : self
    {
        $this->whoMakesCalculation = $whoMakesCalculation;
        return $this;
    }
}