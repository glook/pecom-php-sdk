<?php

declare(strict_types=1);

namespace glook\PecomSdk\Client;

use glook\PecomSdk\Generated\Client as GeneratedClient;
use glook\PecomSdk\Generated\Model\BranchesAddressRequest;
use glook\PecomSdk\Generated\Model\BranchesAllPostBody;
use glook\PecomSdk\Generated\Model\BranchesAllPostResponse200;
use glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostResponse200;
use glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBody;
use glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostResponse200;
use glook\PecomSdk\Generated\Model\CargoContentItem;
use glook\PecomSdk\Generated\Model\CargosCurrentStatusRequest;
use glook\PecomSdk\Generated\Model\CurrentStatusResponse;
use glook\PecomSdk\Generated\Model\OrderPrintRequest;
use glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest;
use glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse;
use glook\PecomSdk\Generated\Model\TypesOfDeliveryItem;

/**
 * Типизированный фасад над сгенерированным клиентом.
 *
 * Методы Generated\Client не объявляют тип возврата: он зависит от режима
 * fetch, а union-типы недоступны на PHP 7.2. Из-за этого моки generated-клиента
 * в тестах потребителя отдают null, и потребитель падает на первой же операции
 * с результатом. Здесь тип объявлен, поэтому мок отдаёт пустой массив.
 *
 * Фасад покрывает операции, которые нужны потребителям; всё остальное
 * доступно через raw().
 *
 * Класс намеренно не final: он существует как точка подмены в тестах
 * потребителя, а final-класс замокать нельзя.
 */
class PecomClient
{
    /** @var GeneratedClient */
    private $client;

    public function __construct(GeneratedClient $client)
    {
        $this->client = $client;
    }

    public function raw(): GeneratedClient
    {
        return $this->client;
    }

    /**
     * @return TypesOfDeliveryItem[]
     */
    public function typesOfDelivery(): array
    {
        return $this->client->typesofdeliveryAll();
    }

    /**
     * @return CargoContentItem[]
     */
    public function cargoContent(): array
    {
        return $this->client->cargocontentAll();
    }

    public function branches(BranchesAllPostBody $requestBody): BranchesAllPostResponse200
    {
        return $this->client->branchesAll($requestBody);
    }

    public function findZoneByAddress(BranchesAddressRequest $requestBody): BranchesFindzonebyaddressPostResponse200
    {
        return $this->client->branchesFindzonebyaddress($requestBody);
    }

    public function nearestDepartments(BranchesNearestdepartmentsPostBody $requestBody): BranchesNearestdepartmentsPostResponse200
    {
        return $this->client->branchesNearestdepartments($requestBody);
    }

    public function cargosCurrentStatus(CargosCurrentStatusRequest $requestBody): CurrentStatusResponse
    {
        return $this->client->cargosCurrentstatus($requestBody);
    }

    public function submitPreregistration(PreregistrationSubmitRequest $requestBody): PreregistrationSubmitResponse
    {
        return $this->client->preregistrationSubmit($requestBody);
    }

    /**
     * Содержимое PDF в кодировке base64: схема описывает ответ order/print как
     * `type: string, format: byte`, а не как поток.
     */
    public function printOrder(OrderPrintRequest $requestBody): string
    {
        /** @var string $pdf */
        $pdf = $this->client->orderPrint($requestBody);

        return $pdf;
    }
}
