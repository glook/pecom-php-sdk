<?php

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Generated;

use glook\PecomSdk\Generated\Client as GeneratedClient;
use glook\PecomSdk\Generated\Model\PersonPhone;
use glook\PecomSdk\Generated\Model\PreregistrationCargo;
use glook\PecomSdk\Generated\Model\PreregistrationCargoCommon;
use glook\PecomSdk\Generated\Model\PreregistrationCommon;
use glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpart;
use glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpartOther;
use glook\PecomSdk\Generated\Model\PreregistrationReceiver;
use glook\PecomSdk\Generated\Model\PreregistrationSender;
use glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest;
use glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

/**
 * @internal
 *
 * @coversNothing
 */
class PreregistrationEdiContractTest extends TestCase
{
    public function testEdiFieldsAreSerializedAndTemplateUrlsAreDeserialized(): void
    {
        $capturedPayload = null;
        $client = $this->createClientCapturing($capturedPayload);
        $other = (new PreregistrationEdiCounterpartOther())
            ->setLegalForm(1)
            ->setInn('7707083893')
            ->setKpp('773601001')
            ->setTitle('ООО Тест')
        ;
        $ediCounterpart = (new PreregistrationEdiCounterpart())
            ->setEDItype(3)
            ->setEDImail('edi@example.com')
            ->setOther($other)
        ;

        $response = $client->preregistrationSubmit(
            $this->createRequest('FFS_EDI', $ediCounterpart, true)
        );

        self::assertInstanceOf(PreregistrationSubmitResponse::class, $response);
        self::assertSame(['https://example.com/edi-template'], $response->getEdiTemplateUrls());
        self::assertIsArray($capturedPayload);
        self::assertSame('FFS_EDI', $capturedPayload['common']['docflowType']);
        self::assertSame(['643'], $capturedPayload['cargos'][0]['common']['countryCargocode']);
        self::assertTrue($capturedPayload['cargos'][0]['common']['isRegisteredGoogs']);
        self::assertSame(3, $capturedPayload['EDICounterpart']['EDItype']);
        self::assertSame('edi@example.com', $capturedPayload['EDICounterpart']['EDImail']);
        self::assertSame(1, $capturedPayload['EDICounterpart']['other']['legalForm']);
        self::assertSame('7707083893', $capturedPayload['EDICounterpart']['other']['inn']);
    }

    public function testEdiCounterpartCanBeOmittedForCourierDocflow(): void
    {
        $capturedPayload = null;
        $client = $this->createClientCapturing($capturedPayload);

        $client->preregistrationSubmit($this->createRequest('COURIER'));

        self::assertIsArray($capturedPayload);
        self::assertSame('COURIER', $capturedPayload['common']['docflowType']);
        self::assertArrayNotHasKey('EDICounterpart', $capturedPayload);
        self::assertArrayNotHasKey('countryCargocode', $capturedPayload['cargos'][0]['common']);
        self::assertFalse($capturedPayload['cargos'][0]['common']['isRegisteredGoogs']);
    }

    public function testFfsDocflowTypeIsSerialized(): void
    {
        $capturedPayload = null;
        $client = $this->createClientCapturing($capturedPayload);

        $client->preregistrationSubmit($this->createRequest('FFS'));

        self::assertIsArray($capturedPayload);
        self::assertSame('FFS', $capturedPayload['common']['docflowType']);
    }

    public function testDocflowTypeCanBeOmittedForBackwardCompatibility(): void
    {
        $capturedPayload = null;
        $client = $this->createClientCapturing($capturedPayload);

        $client->preregistrationSubmit($this->createRequest());

        self::assertIsArray($capturedPayload);
        self::assertArrayNotHasKey('docflowType', $capturedPayload['common']);
    }

    public function testOtherCanBeOmittedWhenSenderSignsEdiDocuments(): void
    {
        $capturedPayload = null;
        $client = $this->createClientCapturing($capturedPayload);
        $ediCounterpart = (new PreregistrationEdiCounterpart())->setEDItype(1);

        $client->preregistrationSubmit($this->createRequest('FFS_EDI', $ediCounterpart, true));

        self::assertIsArray($capturedPayload);
        self::assertSame(1, $capturedPayload['EDICounterpart']['EDItype']);
        self::assertArrayNotHasKey('other', $capturedPayload['EDICounterpart']);
    }

    private function createRequest(
        ?string $docflowType = null,
        ?PreregistrationEdiCounterpart $ediCounterpart = null,
        bool $withEdiCargoFields = false
    ): PreregistrationSubmitRequest {
        $phone = (new PersonPhone())->setPhone('+74956601111');
        $sender = (new PreregistrationSender())
            ->setLegalForm(1)
            ->setTitle('ООО Отправитель')
            ->setPerson('Иванов Иван')
            ->setPersonPhones([$phone])
            ->setWarehouseId('521fc4dd-6650-11e3-a392-00155d505c08')
        ;
        $receiver = (new PreregistrationReceiver())
            ->setLegalForm(1)
            ->setTitle('ООО Получатель')
            ->setPerson('Петров Пётр')
            ->setPersonPhones([$phone])
            ->setWarehouseId('c496b0d2-8e45-11df-bb3b-0019bbc941ce')
        ;
        $cargoCommon = (new PreregistrationCargoCommon())
            ->setType(3)
            ->setPositionsCount(1)
            ->setDescription('Оборудование')
        ;

        if ($withEdiCargoFields) {
            $cargoCommon
                ->setCountryCargocode(['643'])
                ->setIsRegisteredGoogs(true)
            ;
        }

        $cargo = (new PreregistrationCargo())
            ->setCommon($cargoCommon)
            ->setReceiver($receiver)
        ;
        $common = (new PreregistrationCommon())->setOrderType(0);

        if (null !== $docflowType) {
            $common->setDocflowType($docflowType);
        }

        $request = (new PreregistrationSubmitRequest())
            ->setCommon($common)
            ->setSender($sender)
            ->setCargos([$cargo])
        ;

        if (null !== $ediCounterpart) {
            $request->setEDICounterpart($ediCounterpart);
        }

        return $request;
    }

    private function createClientCapturing(?array &$capturedPayload): GeneratedClient
    {
        $httpClient = $this->createMock(ClientInterface::class);
        $httpClient->expects(self::once())
            ->method('sendRequest')
            ->willReturnCallback(static function (RequestInterface $request) use (&$capturedPayload): Response {
                $capturedPayload = json_decode((string) $request->getBody(), true);

                return new Response(
                    200,
                    ['Content-Type' => 'application/json'],
                    '{"documentId":136,"sender":{},"cargos":[],"ediTemplateUrls":["https://example.com/edi-template"]}'
                );
            });

        return GeneratedClient::create($httpClient);
    }
}
