<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationEdiCounterpart
{
    /**
     * Электронная почта для уведомлений по ЭДО. Черновик поручения экспедитору будет отправлен на эту почту в течение одного рабочего часа или появится в кабинете ЭДО.
     *
     * @var null|string
     */
    protected $eDImail;

    /**
     * Тип подписанта в ЭДО: 1 — отправитель, 2 — получатель, 3 — третье лицо.
     *
     * @var int
     */
    protected $eDItype;

    /**
     * @var null|PreregistrationEdiCounterpartOther
     */
    protected $other;

    /**
     * Электронная почта для уведомлений по ЭДО. Черновик поручения экспедитору будет отправлен на эту почту в течение одного рабочего часа или появится в кабинете ЭДО.
     */
    public function getEDImail(): ?string
    {
        return $this->eDImail;
    }

    /**
     * Электронная почта для уведомлений по ЭДО. Черновик поручения экспедитору будет отправлен на эту почту в течение одного рабочего часа или появится в кабинете ЭДО.
     */
    public function setEDImail(?string $eDImail): self
    {
        $this->eDImail = $eDImail;

        return $this;
    }

    /**
     * Тип подписанта в ЭДО: 1 — отправитель, 2 — получатель, 3 — третье лицо.
     */
    public function getEDItype(): int
    {
        return $this->eDItype;
    }

    /**
     * Тип подписанта в ЭДО: 1 — отправитель, 2 — получатель, 3 — третье лицо.
     */
    public function setEDItype(int $eDItype): self
    {
        $this->eDItype = $eDItype;

        return $this;
    }

    public function getOther(): ?PreregistrationEdiCounterpartOther
    {
        return $this->other;
    }

    public function setOther(?PreregistrationEdiCounterpartOther $other): self
    {
        $this->other = $other;

        return $this;
    }
}
