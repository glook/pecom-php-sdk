<?php

namespace glook\PecomSdk\Generated\Model;

class ConnectedDiscountsServicesAgreementsResponse
{
    /**
     * Массив с данными по основным подключенным дополнительным соглашениям (могут быть выведены только те, что представлены ниже). Все прочие в настоящее время не выводятся.
     *
     * @var AgreementItem[]
     */
    protected $additionalAgreements;
    /**
     * Массив доступных контрагенту идентификаторов продуктов/тарифов. Полный список доступных в API продуктов/тарифов можно получить методом [`/TYPESOFDELIVERY/ALL/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     *
     * @var float[]
     */
    protected $availableTypesOfDelivery;
    /**
     * Перечень всех подключенных контрагенту сервисов и скидок с их основными параметрами
     *
     * @var SpecialConditionWithParams[]
     */
    protected $specialConditionsWithParams;
    /**
     * Массив с данными по основным подключенным дополнительным соглашениям (могут быть выведены только те, что представлены ниже). Все прочие в настоящее время не выводятся.
     *
     * @return AgreementItem[]
     */
    public function getAdditionalAgreements() : array
    {
        return $this->additionalAgreements;
    }
    /**
     * Массив с данными по основным подключенным дополнительным соглашениям (могут быть выведены только те, что представлены ниже). Все прочие в настоящее время не выводятся.
     *
     * @param AgreementItem[] $additionalAgreements
     *
     * @return self
     */
    public function setAdditionalAgreements(array $additionalAgreements) : self
    {
        $this->additionalAgreements = $additionalAgreements;
        return $this;
    }
    /**
     * Массив доступных контрагенту идентификаторов продуктов/тарифов. Полный список доступных в API продуктов/тарифов можно получить методом [`/TYPESOFDELIVERY/ALL/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     *
     * @return float[]
     */
    public function getAvailableTypesOfDelivery() : array
    {
        return $this->availableTypesOfDelivery;
    }
    /**
     * Массив доступных контрагенту идентификаторов продуктов/тарифов. Полный список доступных в API продуктов/тарифов можно получить методом [`/TYPESOFDELIVERY/ALL/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     *
     * @param float[] $availableTypesOfDelivery
     *
     * @return self
     */
    public function setAvailableTypesOfDelivery(array $availableTypesOfDelivery) : self
    {
        $this->availableTypesOfDelivery = $availableTypesOfDelivery;
        return $this;
    }
    /**
     * Перечень всех подключенных контрагенту сервисов и скидок с их основными параметрами
     *
     * @return SpecialConditionWithParams[]
     */
    public function getSpecialConditionsWithParams() : array
    {
        return $this->specialConditionsWithParams;
    }
    /**
     * Перечень всех подключенных контрагенту сервисов и скидок с их основными параметрами
     *
     * @param SpecialConditionWithParams[] $specialConditionsWithParams
     *
     * @return self
     */
    public function setSpecialConditionsWithParams(array $specialConditionsWithParams) : self
    {
        $this->specialConditionsWithParams = $specialConditionsWithParams;
        return $this;
    }
}