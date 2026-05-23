<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatusResponse
{
    /**
     * Статусы грузов.
     *
     * @var null|CurrentStatusItem[]
     */
    protected $cargos;

    /**
     * Ответ с ошибкой.
     *
     * @var null|CurrentStatusError
     */
    protected $error;

    /**
     * Статусы грузов.
     *
     * @return null|CurrentStatusItem[]
     */
    public function getCargos(): ?array
    {
        return $this->cargos;
    }

    /**
     * Статусы грузов.
     *
     * @param null|CurrentStatusItem[] $cargos
     */
    public function setCargos(?array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }

    /**
     * Ответ с ошибкой.
     */
    public function getError(): ?CurrentStatusError
    {
        return $this->error;
    }

    /**
     * Ответ с ошибкой.
     */
    public function setError(?CurrentStatusError $error): self
    {
        $this->error = $error;

        return $this;
    }
}
