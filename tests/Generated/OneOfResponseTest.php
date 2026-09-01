<?php

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 */

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Generated;

use glook\PecomSdk\Generated\Client as GeneratedClient;
use glook\PecomSdk\Generated\Model\CargoPickupStatusError;
use glook\PecomSdk\Generated\Model\CargoPickupStatusItem;
use glook\PecomSdk\Generated\Model\CargoPickupStatusRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentErrorResponse;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @internal
 *
 * @coversNothing
 */
class OneOfResponseTest extends TestCase
{
    public function testCargoPickupStatusReturnsDeclaredBranches(): void
    {
        $itemsClient = $this->createClientReturning(
            new Response(200, ['Content-Type' => 'application/json'], '[{"cargoCode":"ABC"}]')
        );

        $items = $itemsClient->cargopickupStatus($this->createPickupRequest());

        self::assertContainsOnlyInstancesOf(CargoPickupStatusItem::class, $items);
        self::assertSame('ABC', $items[0]->getCargoCode());

        $errorClient = $this->createClientReturning(
            new Response(
                200,
                ['Content-Type' => 'application/json'],
                '{"error":{"title":"Ошибка","message":"Груз не найден","status":404}}'
            )
        );

        $error = $errorClient->cargopickupStatus($this->createPickupRequest());

        self::assertInstanceOf(CargoPickupStatusError::class, $error);
        self::assertSame(404, $error->getError()->getStatus());
    }

    public function testDocumentContentReturnsDeclaredBranches(): void
    {
        $successClient = $this->createClientReturning(
            new Response(
                200,
                ['Content-Type' => 'application/json'],
                '{"docName":"document.pdf","docBody":"QQ=="}'
            )
        );

        $success = $successClient->cargosdocumentsGetcontent($this->createDocumentRequest());

        self::assertInstanceOf(CargosdocumentsGetcontentSuccessResponse::class, $success);
        self::assertSame('document.pdf', $success->getDocName());
        self::assertSame('QQ==', $success->getDocBody());

        $errorClient = $this->createClientReturning(
            new Response(
                200,
                ['Content-Type' => 'application/json'],
                '{"error":{"title":"Ошибка","status":404}}'
            )
        );

        $error = $errorClient->cargosdocumentsGetcontent($this->createDocumentRequest());

        self::assertInstanceOf(CargosdocumentsGetcontentErrorResponse::class, $error);
        self::assertSame(404, $error->getError()->getStatus());
    }

    /**
     * @dataProvider invalidResponses
     */
    public function testOneOfResponseRejectsInvalidPayload(string $method, string $body): void
    {
        $request = 'cargopickupStatus' === $method
            ? $this->createPickupRequest()
            : $this->createDocumentRequest();

        $client = $this->createClientReturning(
            new Response(200, ['Content-Type' => 'application/json'], $body)
        );

        $this->expectException(\UnexpectedValueException::class);

        $client->{$method}($request);
    }

    public function invalidResponses(): array
    {
        return [
            'pickup null' => ['cargopickupStatus', 'null'],
            'pickup malformed JSON' => ['cargopickupStatus', 'not-json'],
            'pickup unmatched object' => ['cargopickupStatus', '{"unexpected":true}'],
            'pickup item without cargo code' => ['cargopickupStatus', '[{}]'],
            'pickup item with wrong cargo code type' => ['cargopickupStatus', '[{"cargoCode":42}]'],
            'pickup incomplete error' => ['cargopickupStatus', '{"error":{"title":"Ошибка","status":404}}'],
            'document null' => ['cargosdocumentsGetcontent', 'null'],
            'document malformed JSON' => ['cargosdocumentsGetcontent', 'not-json'],
            'document unmatched object' => ['cargosdocumentsGetcontent', '{"unexpected":true}'],
            'document ambiguous object' => [
                'cargosdocumentsGetcontent',
                '{"docName":"document.pdf","docBody":"QQ==","error":{"title":"Ошибка","status":404}}',
            ],
            'document success with wrong name type' => [
                'cargosdocumentsGetcontent',
                '{"docName":42,"docBody":"QQ=="}',
            ],
            'document incomplete error' => [
                'cargosdocumentsGetcontent',
                '{"error":{"status":404}}',
            ],
        ];
    }

    public function testOneOfMethodsDeclareBranchTypes(): void
    {
        $pickupDoc = (new \ReflectionMethod(GeneratedClient::class, 'cargopickupStatus'))->getDocComment();
        self::assertIsString($pickupDoc);
        self::assertStringContainsString('CargoPickupStatusItem[]', $pickupDoc);
        self::assertStringContainsString('CargoPickupStatusError', $pickupDoc);
        self::assertStringContainsString('ResponseInterface', $pickupDoc);
        self::assertStringNotContainsString('@return null', $pickupDoc);

        $documentDoc = (new \ReflectionMethod(GeneratedClient::class, 'cargosdocumentsGetcontent'))->getDocComment();
        self::assertIsString($documentDoc);
        self::assertStringContainsString('CargosdocumentsGetcontentSuccessResponse', $documentDoc);
        self::assertStringContainsString('CargosdocumentsGetcontentErrorResponse', $documentDoc);
        self::assertStringContainsString('ResponseInterface', $documentDoc);
        self::assertStringNotContainsString('@return null', $documentDoc);
    }

    public function testOneOfMethodsKeepRawResponseInResponseFetchMode(): void
    {
        $pickupResponse = new Response(200, ['Content-Type' => 'application/json'], 'not-json');
        $pickupClient = $this->createClientReturning($pickupResponse);

        self::assertSame(
            $pickupResponse,
            $pickupClient->cargopickupStatus($this->createPickupRequest(), GeneratedClient::FETCH_RESPONSE)
        );

        $documentResponse = new Response(200, ['Content-Type' => 'application/json'], 'not-json');
        $documentClient = $this->createClientReturning($documentResponse);

        self::assertSame(
            $documentResponse,
            $documentClient->cargosdocumentsGetcontent($this->createDocumentRequest(), GeneratedClient::FETCH_RESPONSE)
        );
    }

    private function createPickupRequest(): CargoPickupStatusRequest
    {
        return (new CargoPickupStatusRequest())->setCargoCodes(['ABC']);
    }

    private function createDocumentRequest(): CargosdocumentsGetcontentRequest
    {
        return (new CargosdocumentsGetcontentRequest())
            ->setCargoCode('ABC')
            ->setDocType('CargoAssignment')
        ;
    }

    private function createClientReturning(ResponseInterface $response): GeneratedClient
    {
        $httpClient = $this->createMock(ClientInterface::class);
        $httpClient->method('sendRequest')->willReturn($response);

        return GeneratedClient::create($httpClient);
    }
}
