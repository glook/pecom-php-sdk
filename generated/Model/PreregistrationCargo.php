<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCargo
{
    /**
     * @var PreregistrationCargoCommon
     */
    protected $common;

    /**
     * @var PreregistrationReceiver
     */
    protected $receiver;

    /**
     * Информация о порядке возврата отказных/невостребованных грузов (актуально только для грузов EasyWay, в остальных продуктах игнорируется). Заполняется только если получатель возврата отличается от Отправителя или Способ возврата отличается от способа передачи и грузов в EasyWay. Например, при отправке мы забираем у Вас со склада, а возвратные грузы Вы забираете самостоятельно с нашего склада
     *
     * @var null|PreregistrationRefusalWarehouse
     */
    protected $refusalWarehouse;

    /**
     * @var null|PreregistrationServices
     */
    protected $services;

    public function getCommon(): PreregistrationCargoCommon
    {
        return $this->common;
    }

    public function setCommon(PreregistrationCargoCommon $common): self
    {
        $this->common = $common;

        return $this;
    }

    public function getReceiver(): PreregistrationReceiver
    {
        return $this->receiver;
    }

    public function setReceiver(PreregistrationReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Информация о порядке возврата отказных/невостребованных грузов (актуально только для грузов EasyWay, в остальных продуктах игнорируется). Заполняется только если получатель возврата отличается от Отправителя или Способ возврата отличается от способа передачи и грузов в EasyWay. Например, при отправке мы забираем у Вас со склада, а возвратные грузы Вы забираете самостоятельно с нашего склада
     */
    public function getRefusalWarehouse(): ?PreregistrationRefusalWarehouse
    {
        return $this->refusalWarehouse;
    }

    /**
     * Информация о порядке возврата отказных/невостребованных грузов (актуально только для грузов EasyWay, в остальных продуктах игнорируется). Заполняется только если получатель возврата отличается от Отправителя или Способ возврата отличается от способа передачи и грузов в EasyWay. Например, при отправке мы забираем у Вас со склада, а возвратные грузы Вы забираете самостоятельно с нашего склада
     */
    public function setRefusalWarehouse(?PreregistrationRefusalWarehouse $refusalWarehouse): self
    {
        $this->refusalWarehouse = $refusalWarehouse;

        return $this;
    }

    public function getServices(): ?PreregistrationServices
    {
        return $this->services;
    }

    public function setServices(?PreregistrationServices $services): self
    {
        $this->services = $services;

        return $this;
    }
}
