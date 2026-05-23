<?php

namespace glook\PecomSdk\Generated\Model;

class CancelAndReturnResponse
{
    /**
     * Описание результата.
     *
     * @var null|string
     */
    protected $description;

    /**
     * Результат. `true` — возврат успешно оформлен при текущем вызове метода или ранее (любым из способов), `false` — не удалось оформить возврат
     *
     * @var null|bool
     */
    protected $success;

    /**
     * Описание результата.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Описание результата.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Результат. `true` — возврат успешно оформлен при текущем вызове метода или ранее (любым из способов), `false` — не удалось оформить возврат
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * Результат. `true` — возврат успешно оформлен при текущем вызове метода или ранее (любым из способов), `false` — не удалось оформить возврат
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;

        return $this;
    }
}
