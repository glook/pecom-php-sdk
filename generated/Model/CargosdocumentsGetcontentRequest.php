<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsGetcontentRequest
{
    /**
     * Код груза
     *
     * @var string
     */
    protected $cargoCode;
    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК, обязателен для `"docType"` = `"CargoInvoice"`
     *
     * @var string|null
     */
    protected $counterpartGuid;
    /**
     * Формат документа. Если не передан, вернется документ в формате `"pdf"`. Формат `"xml"` можно указать только для счета на оплату `"CargoInvoice"`
     *
     * @var string|null
     */
    protected $docFormat = 'pdf';
    /**
     * Тип документа. `"CargoAssignment"` - Поручение экспедитора/ Экспедиторская расписка, `"CargoInvoice"` - Счет на оплату
     *
     * @var string
     */
    protected $docType;
    /**
     * Код груза
     *
     * @return string
     */
    public function getCargoCode() : string
    {
        return $this->cargoCode;
    }
    /**
     * Код груза
     *
     * @param string $cargoCode
     *
     * @return self
     */
    public function setCargoCode(string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК, обязателен для `"docType"` = `"CargoInvoice"`
     *
     * @return string|null
     */
    public function getCounterpartGuid() : ?string
    {
        return $this->counterpartGuid;
    }
    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК, обязателен для `"docType"` = `"CargoInvoice"`
     *
     * @param string|null $counterpartGuid
     *
     * @return self
     */
    public function setCounterpartGuid(?string $counterpartGuid) : self
    {
        $this->counterpartGuid = $counterpartGuid;
        return $this;
    }
    /**
     * Формат документа. Если не передан, вернется документ в формате `"pdf"`. Формат `"xml"` можно указать только для счета на оплату `"CargoInvoice"`
     *
     * @return string|null
     */
    public function getDocFormat() : ?string
    {
        return $this->docFormat;
    }
    /**
     * Формат документа. Если не передан, вернется документ в формате `"pdf"`. Формат `"xml"` можно указать только для счета на оплату `"CargoInvoice"`
     *
     * @param string|null $docFormat
     *
     * @return self
     */
    public function setDocFormat(?string $docFormat) : self
    {
        $this->docFormat = $docFormat;
        return $this;
    }
    /**
     * Тип документа. `"CargoAssignment"` - Поручение экспедитора/ Экспедиторская расписка, `"CargoInvoice"` - Счет на оплату
     *
     * @return string
     */
    public function getDocType() : string
    {
        return $this->docType;
    }
    /**
     * Тип документа. `"CargoAssignment"` - Поручение экспедитора/ Экспедиторская расписка, `"CargoInvoice"` - Счет на оплату
     *
     * @param string $docType
     *
     * @return self
     */
    public function setDocType(string $docType) : self
    {
        $this->docType = $docType;
        return $this;
    }
}