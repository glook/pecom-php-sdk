<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsOrderRequest
{
    /**
     * Код груза.
     *
     * @var string
     */
    protected $cargoCode;

    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК, обязателен для `"docType"` = `"CargoInvoice"`.
     *
     * @var null|string
     */
    protected $counterpartGuid;

    /**
     * Формат документа. Если не передан, вернется документ в формате `"pdf"`. Формат `"xml"` можно указать только для счета на оплату `"CargoInvoice"`.
     *
     * @var null|string
     */
    protected $docFormat = 'pdf';

    /**
     * Тип документа. `"CargoAssignment"` - Поручение экспедитора/ Экспедиторская расписка, `"CargoInvoice"` - Счет на оплату.
     *
     * @var string
     */
    protected $docType;

    /**
     * Код груза.
     */
    public function getCargoCode(): string
    {
        return $this->cargoCode;
    }

    /**
     * Код груза.
     */
    public function setCargoCode(string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК, обязателен для `"docType"` = `"CargoInvoice"`.
     */
    public function getCounterpartGuid(): ?string
    {
        return $this->counterpartGuid;
    }

    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК, обязателен для `"docType"` = `"CargoInvoice"`.
     */
    public function setCounterpartGuid(?string $counterpartGuid): self
    {
        $this->counterpartGuid = $counterpartGuid;

        return $this;
    }

    /**
     * Формат документа. Если не передан, вернется документ в формате `"pdf"`. Формат `"xml"` можно указать только для счета на оплату `"CargoInvoice"`.
     */
    public function getDocFormat(): ?string
    {
        return $this->docFormat;
    }

    /**
     * Формат документа. Если не передан, вернется документ в формате `"pdf"`. Формат `"xml"` можно указать только для счета на оплату `"CargoInvoice"`.
     */
    public function setDocFormat(?string $docFormat): self
    {
        $this->docFormat = $docFormat;

        return $this;
    }

    /**
     * Тип документа. `"CargoAssignment"` - Поручение экспедитора/ Экспедиторская расписка, `"CargoInvoice"` - Счет на оплату.
     */
    public function getDocType(): string
    {
        return $this->docType;
    }

    /**
     * Тип документа. `"CargoAssignment"` - Поручение экспедитора/ Экспедиторская расписка, `"CargoInvoice"` - Счет на оплату.
     */
    public function setDocType(string $docType): self
    {
        $this->docType = $docType;

        return $this;
    }
}
