<?php

namespace glook\PecomSdk\Generated\Model;

class KindOfTransportation
{
    /**
     * Наименование тарифа/продукта
     *
     * @var string
     */
    protected $description;
    /**
     * Доступные операции в отделении для данного тарифа/продукта
     *
     * @var string[]
     */
    protected $operations;
    /**
     * Идентификатор продукта/тарифа. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     *
     * @var int
     */
    protected $type;
    /**
     * Наименование тарифа/продукта
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Наименование тарифа/продукта
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Доступные операции в отделении для данного тарифа/продукта
     *
     * @return string[]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * Доступные операции в отделении для данного тарифа/продукта
     *
     * @param string[] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
    /**
     * Идентификатор продукта/тарифа. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Идентификатор продукта/тарифа. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
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