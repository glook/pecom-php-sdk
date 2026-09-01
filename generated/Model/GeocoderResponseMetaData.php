<?php

namespace glook\PecomSdk\Generated\Model;

class GeocoderResponseMetaData
{
    /**
     * Количество найденных вариантов адресов по строке запроса
     *
     * @var string
     */
    protected $found;

    /**
     * Часть адреса, по которому подбирались варианты
     *
     * @var string
     */
    protected $request;

    /**
     * Максимальное количество результатов
     *
     * @var string
     */
    protected $results;

    /**
     * Количество найденных вариантов адресов по строке запроса
     */
    public function getFound(): string
    {
        return $this->found;
    }

    /**
     * Количество найденных вариантов адресов по строке запроса
     */
    public function setFound(string $found): self
    {
        $this->found = $found;

        return $this;
    }

    /**
     * Часть адреса, по которому подбирались варианты
     */
    public function getRequest(): string
    {
        return $this->request;
    }

    /**
     * Часть адреса, по которому подбирались варианты
     */
    public function setRequest(string $request): self
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Максимальное количество результатов
     */
    public function getResults(): string
    {
        return $this->results;
    }

    /**
     * Максимальное количество результатов
     */
    public function setResults(string $results): self
    {
        $this->results = $results;

        return $this;
    }
}
