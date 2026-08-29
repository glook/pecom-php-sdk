<?php

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Client;

use glook\PecomSdk\Client\PecomClient;
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
use PHPUnit\Framework\TestCase;

class PecomClientTest extends TestCase
{
    public function testRawExposesGeneratedClient(): void
    {
        $generated = $this->createMock(GeneratedClient::class);

        self::assertSame($generated, (new PecomClient($generated))->raw());
    }

    /**
     * Главное, ради чего существует фасад: методы Generated\Client не объявляют
     * тип возврата, поэтому его мок отдаёт null и потребитель падает на первой
     * же операции с массивом. У фасада тип объявлен, и мок отдаёт пустой массив.
     */
    public function testMockOfFacadeReturnsTypedValuesInsteadOfNull(): void
    {
        $facade = $this->createMock(PecomClient::class);

        self::assertSame([], $facade->typesOfDelivery());
        self::assertSame([], $facade->cargoContent());
        self::assertSame('', $facade->printOrder(new OrderPrintRequest()));

        self::assertInstanceOf(BranchesAllPostResponse200::class, $facade->branches(new BranchesAllPostBody()));
        self::assertInstanceOf(
            BranchesFindzonebyaddressPostResponse200::class,
            $facade->findZoneByAddress(new BranchesAddressRequest())
        );
        self::assertInstanceOf(
            BranchesNearestdepartmentsPostResponse200::class,
            $facade->nearestDepartments(new BranchesNearestdepartmentsPostBody())
        );
        self::assertInstanceOf(
            CurrentStatusResponse::class,
            $facade->cargosCurrentStatus(new CargosCurrentStatusRequest())
        );
        self::assertInstanceOf(
            PreregistrationSubmitResponse::class,
            $facade->submitPreregistration(new PreregistrationSubmitRequest())
        );
    }

    public function testMockOfGeneratedClientReturnsNull(): void
    {
        $generated = $this->createMock(GeneratedClient::class);

        self::assertNull($generated->typesofdeliveryAll());
    }

    public function testTypesOfDeliveryDelegatesAndReturnsArray(): void
    {
        $items = [new TypesOfDeliveryItem()];
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('typesofdeliveryAll')->willReturn($items);

        self::assertSame($items, (new PecomClient($generated))->typesOfDelivery());
    }

    public function testCargoContentDelegatesAndReturnsArray(): void
    {
        $items = [new CargoContentItem()];
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('cargocontentAll')->willReturn($items);

        self::assertSame($items, (new PecomClient($generated))->cargoContent());
    }

    public function testBranchesDelegatesWithRequestBody(): void
    {
        $body = new BranchesAllPostBody();
        $response = new BranchesAllPostResponse200();
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('branchesAll')->with($body)->willReturn($response);

        self::assertSame($response, (new PecomClient($generated))->branches($body));
    }

    public function testFindZoneByAddressDelegatesWithRequestBody(): void
    {
        $body = new BranchesAddressRequest();
        $response = new BranchesFindzonebyaddressPostResponse200();
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('branchesFindzonebyaddress')->with($body)->willReturn($response);

        self::assertSame($response, (new PecomClient($generated))->findZoneByAddress($body));
    }

    public function testNearestDepartmentsDelegatesWithRequestBody(): void
    {
        $body = new BranchesNearestdepartmentsPostBody();
        $response = new BranchesNearestdepartmentsPostResponse200();
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('branchesNearestdepartments')->with($body)->willReturn($response);

        self::assertSame($response, (new PecomClient($generated))->nearestDepartments($body));
    }

    public function testCargosCurrentStatusDelegatesWithRequestBody(): void
    {
        $body = new CargosCurrentStatusRequest();
        $response = new CurrentStatusResponse();
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('cargosCurrentstatus')->with($body)->willReturn($response);

        self::assertSame($response, (new PecomClient($generated))->cargosCurrentStatus($body));
    }

    public function testSubmitPreregistrationDelegatesWithRequestBody(): void
    {
        $body = new PreregistrationSubmitRequest();
        $response = new PreregistrationSubmitResponse();
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('preregistrationSubmit')->with($body)->willReturn($response);

        self::assertSame($response, (new PecomClient($generated))->submitPreregistration($body));
    }

    /**
     * order/print отдаёт PDF строкой base64 внутри JSON - схема описывает ответ
     * как `type: string, format: byte`, а не как поток.
     */
    public function testPrintOrderReturnsBase64String(): void
    {
        $body = new OrderPrintRequest();
        $generated = $this->createMock(GeneratedClient::class);
        $generated->expects(self::once())->method('orderPrint')->with($body)->willReturn('JVBERi0xLjQK');

        self::assertSame('JVBERi0xLjQK', (new PecomClient($generated))->printOrder($body));
    }
}
