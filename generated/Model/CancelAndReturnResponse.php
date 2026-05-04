<?php

namespace glook\PecomSdk\Generated\Model;

class CancelAndReturnResponse
{
    /**
     * Описание результата
     *
     * @var string|null
     */
    protected $description;
    /**
     * Результат. `true` — возврат успешно оформлен при текущем вызове метода или ранее (любым из способов), `false` — не удалось оформить возврат
     *
     * @var bool|null
     */
    protected $success;
    /**
     * Описание результата
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Описание результата
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Результат. `true` — возврат успешно оформлен при текущем вызове метода или ранее (любым из способов), `false` — не удалось оформить возврат
     *
     * @return bool|null
     */
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    /**
     * Результат. `true` — возврат успешно оформлен при текущем вызове метода или ранее (любым из способов), `false` — не удалось оформить возврат
     *
     * @param bool|null $success
     *
     * @return self
     */
    public function setSuccess(?bool $success) : self
    {
        $this->success = $success;
        return $this;
    }
}