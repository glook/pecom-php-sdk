<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPayer
{
    /**
     * Данные о плательщике-третьем лице
     *
     * @var PreregistrationPayerOther|null
     */
    protected $other;
    /**
     * Наименование филиала оплаты за услугу. Необязательно. См. комментарий
     *
     * @var string|null
     */
    protected $paymentCity;
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо). Обязательно.
     *
     * @var int
     */
    protected $type;
    /**
     * Данные о плательщике-третьем лице
     *
     * @return PreregistrationPayerOther|null
     */
    public function getOther() : ?PreregistrationPayerOther
    {
        return $this->other;
    }
    /**
     * Данные о плательщике-третьем лице
     *
     * @param PreregistrationPayerOther|null $other
     *
     * @return self
     */
    public function setOther(?PreregistrationPayerOther $other) : self
    {
        $this->other = $other;
        return $this;
    }
    /**
     * Наименование филиала оплаты за услугу. Необязательно. См. комментарий
     *
     * @return string|null
     */
    public function getPaymentCity() : ?string
    {
        return $this->paymentCity;
    }
    /**
     * Наименование филиала оплаты за услугу. Необязательно. См. комментарий
     *
     * @param string|null $paymentCity
     *
     * @return self
     */
    public function setPaymentCity(?string $paymentCity) : self
    {
        $this->paymentCity = $paymentCity;
        return $this;
    }
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо). Обязательно.
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо). Обязательно.
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}