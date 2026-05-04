<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatusResponse
{
    /**
     * Статусы грузов
     *
     * @var CurrentStatusItem[]|null
     */
    protected $cargos;
    /**
     * 
     *
     * @var CurrentStatusError
     */
    protected $error;
    /**
     * Статусы грузов
     *
     * @return CurrentStatusItem[]|null
     */
    public function getCargos() : ?array
    {
        return $this->cargos;
    }
    /**
     * Статусы грузов
     *
     * @param CurrentStatusItem[]|null $cargos
     *
     * @return self
     */
    public function setCargos(?array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
    /**
     * 
     *
     * @return CurrentStatusError
     */
    public function getError() : CurrentStatusError
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param CurrentStatusError $error
     *
     * @return self
     */
    public function setError(CurrentStatusError $error) : self
    {
        $this->error = $error;
        return $this;
    }
}