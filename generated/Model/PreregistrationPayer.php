<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPayer
{
    /**
     * Данные о плательщике-третьем лице.
     *
     * @var null|PreregistrationPayerOther
     */
    protected $other;

    /**
     * Наименование филиала оплаты за услугу. Необязательно. См. комментарий.
     *
     * @var null|string
     */
    protected $paymentCity;

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо). Обязательно.
     *
     * @var int
     */
    protected $type;

    /**
     * Данные о плательщике-третьем лице.
     */
    public function getOther(): ?PreregistrationPayerOther
    {
        return $this->other;
    }

    /**
     * Данные о плательщике-третьем лице.
     */
    public function setOther(?PreregistrationPayerOther $other): self
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Наименование филиала оплаты за услугу. Необязательно. См. комментарий.
     */
    public function getPaymentCity(): ?string
    {
        return $this->paymentCity;
    }

    /**
     * Наименование филиала оплаты за услугу. Необязательно. См. комментарий.
     */
    public function setPaymentCity(?string $paymentCity): self
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо). Обязательно.
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо). Обязательно.
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
