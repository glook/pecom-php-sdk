<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCargo
{
    /**
     * 
     *
     * @var PreregistrationCargoCommon
     */
    protected $common;
    /**
     * 
     *
     * @var PreregistrationReceiver
     */
    protected $receiver;
    /**
     * Информация о порядке возврата отказных/невостребованных грузов (актуально только для грузов EasyWay, в остальных продуктах игнорируется). Заполняется только если получатель возврата отличается от Отправителя или Способ возврата отличается от способа передачи и грузов в EasyWay. Например, при отправке мы забираем у Вас со склада, а возвратные грузы Вы забираете самостоятельно с нашего склада
     *
     * @var PreregistrationRefusalWarehouse|null
     */
    protected $refusalWarehouse;
    /**
     * 
     *
     * @var PreregistrationServices|null
     */
    protected $services;
    /**
     * 
     *
     * @return PreregistrationCargoCommon
     */
    public function getCommon() : PreregistrationCargoCommon
    {
        return $this->common;
    }
    /**
     * 
     *
     * @param PreregistrationCargoCommon $common
     *
     * @return self
     */
    public function setCommon(PreregistrationCargoCommon $common) : self
    {
        $this->common = $common;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationReceiver
     */
    public function getReceiver() : PreregistrationReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param PreregistrationReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(PreregistrationReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * Информация о порядке возврата отказных/невостребованных грузов (актуально только для грузов EasyWay, в остальных продуктах игнорируется). Заполняется только если получатель возврата отличается от Отправителя или Способ возврата отличается от способа передачи и грузов в EasyWay. Например, при отправке мы забираем у Вас со склада, а возвратные грузы Вы забираете самостоятельно с нашего склада
     *
     * @return PreregistrationRefusalWarehouse|null
     */
    public function getRefusalWarehouse() : ?PreregistrationRefusalWarehouse
    {
        return $this->refusalWarehouse;
    }
    /**
     * Информация о порядке возврата отказных/невостребованных грузов (актуально только для грузов EasyWay, в остальных продуктах игнорируется). Заполняется только если получатель возврата отличается от Отправителя или Способ возврата отличается от способа передачи и грузов в EasyWay. Например, при отправке мы забираем у Вас со склада, а возвратные грузы Вы забираете самостоятельно с нашего склада
     *
     * @param PreregistrationRefusalWarehouse|null $refusalWarehouse
     *
     * @return self
     */
    public function setRefusalWarehouse(?PreregistrationRefusalWarehouse $refusalWarehouse) : self
    {
        $this->refusalWarehouse = $refusalWarehouse;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationServices|null
     */
    public function getServices() : ?PreregistrationServices
    {
        return $this->services;
    }
    /**
     * 
     *
     * @param PreregistrationServices|null $services
     *
     * @return self
     */
    public function setServices(?PreregistrationServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
}