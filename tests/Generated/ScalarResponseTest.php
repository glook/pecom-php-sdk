<?php

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Generated;

use DateTime;
use glook\PecomSdk\Generated\Client as GeneratedClient;
use glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest;
use glook\PecomSdk\Generated\Model\OrderPrintRequest;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use ReflectionMethod;

class ScalarResponseTest extends TestCase
{
    public function testOrderPrintReturnsDeclaredStringResponse(): void
    {
        $client = $this->createClientReturning(
            new Response(200, ['Content-Type' => 'application/json'], '"JVBERi0xLjQK"')
        );

        $request = (new OrderPrintRequest())
            ->setCargoIndex('780339690775')
            ->setType('big');

        self::assertSame('JVBERi0xLjQK', $client->orderPrint($request));

        $docComment = (new ReflectionMethod(GeneratedClient::class, 'orderPrint'))->getDocComment();
        self::assertIsString($docComment);
        self::assertStringContainsString('@return ResponseInterface|string', $docComment);
    }

    public function testOrderPrintKeepsRawResponseInResponseFetchMode(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], 'null');
        $client = $this->createClientReturning($response);
        $request = (new OrderPrintRequest())
            ->setCargoIndex('780339690775')
            ->setType('big');

        self::assertSame($response, $client->orderPrint($request, GeneratedClient::FETCH_RESPONSE));
    }

    /**
     * @dataProvider invalidStringResponses
     */
    public function testOrderPrintRejectsInvalidStringResponse(string $body): void
    {
        $client = $this->createClientReturning(
            new Response(200, ['Content-Type' => 'application/json'], $body)
        );

        $request = (new OrderPrintRequest())
            ->setCargoIndex('780339690775')
            ->setType('big');

        $this->expectException(\Exception::class);

        $client->orderPrint($request);
    }

    public function invalidStringResponses(): array
    {
        return [
            'null' => ['null'],
            'malformed JSON' => ['not-json'],
            'wrong scalar type' => ['123'],
        ];
    }

    public function testCargoInvoicesReturnDeclaredStringArrayResponse(): void
    {
        $client = $this->createClientReturning(
            new Response(200, ['Content-Type' => 'application/json'], '["invoice-1","invoice-2"]')
        );

        $request = $this->createCargoInvoiceRequest();

        self::assertSame(
            ['invoice-1', 'invoice-2'],
            $client->cargosdocumentsCargoinvoicebyperiod($request)
        );

        $docComment = (new ReflectionMethod(GeneratedClient::class, 'cargosdocumentsCargoinvoicebyperiod'))->getDocComment();
        self::assertIsString($docComment);
        self::assertStringContainsString('@return ResponseInterface|string[]', $docComment);
    }

    /**
     * @dataProvider invalidStringArrayResponses
     */
    public function testCargoInvoicesRejectInvalidStringArrayResponse(string $body): void
    {
        $client = $this->createClientReturning(
            new Response(200, ['Content-Type' => 'application/json'], $body)
        );

        $this->expectException(\Exception::class);

        $client->cargosdocumentsCargoinvoicebyperiod($this->createCargoInvoiceRequest());
    }

    public function invalidStringArrayResponses(): array
    {
        return [
            'null' => ['null'],
            'malformed JSON' => ['not-json'],
            'wrong top-level type' => ['{}'],
            'wrong item type' => ['[123]'],
        ];
    }

    private function createCargoInvoiceRequest(): CargosdocumentsCargoinvoicebyperiodRequest
    {
        return (new CargosdocumentsCargoinvoicebyperiodRequest())
            ->setCounterpartGuid('00000000-0000-0000-0000-000000000000')
            ->setDateFrom(new DateTime('2026-01-01'))
            ->setDateTo(new DateTime('2026-01-31'));
    }

    private function createClientReturning(ResponseInterface $response): GeneratedClient
    {
        $httpClient = $this->createMock(ClientInterface::class);
        $httpClient->method('sendRequest')->willReturn($response);

        return GeneratedClient::create($httpClient);
    }
}
