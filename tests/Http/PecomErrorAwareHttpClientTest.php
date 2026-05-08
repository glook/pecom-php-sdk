<?php

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Http;

use glook\PecomSdk\Exception\PecomApiException;
use glook\PecomSdk\Exception\PecomValidationException;
use glook\PecomSdk\Http\PecomErrorAwareHttpClient;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class PecomErrorAwareHttpClientTest extends TestCase
{
    private function makeResponse(int $status, string $body): ResponseInterface
    {
        $stream = $this->createMock(StreamInterface::class);
        $stream->method('__toString')->willReturn($body);

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn($status);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturnSelf();
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('application/json');

        return $response;
    }

    private function makeClient(ResponseInterface $response): ClientInterface
    {
        $inner = $this->createMock(ClientInterface::class);
        $inner->method('sendRequest')->willReturn($response);

        return $inner;
    }

    private function makeRequest(): RequestInterface
    {
        return $this->createMock(RequestInterface::class);
    }

    public function testValidationErrorHttp200ThrowsPecomValidationException(): void
    {
        $body = json_encode([
            'error' => [
                'fields' => [
                    [
                        'Key' => 'plannedDateTime',
                        'Value' => ['Переданное значение не соответствует формату yyyy-MM-ddTHH:mm:ss, либо передана не существующая дата'],
                    ],
                    [
                        'Key' => 'types[1]',
                        'Value' => ['Указанное значение идентификатора продукта/тарифа не найдено среди доступных в ПЭК'],
                    ],
                ],
                'title' => 'Ошибка валидации',
                'message' => 'Детальные сообщения об ошибках приведены отдельно для каждого поля',
                'error' => null,
                'status' => 400,
            ],
        ]);

        $response = $this->makeResponse(200, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $this->expectException(PecomValidationException::class);
        $client->sendRequest($this->makeRequest());
    }

    public function testValidationExceptionHasCorrectFields(): void
    {
        $body = json_encode([
            'error' => [
                'fields' => [
                    ['Key' => 'plannedDateTime', 'Value' => ['Дата не существует']],
                    ['Key' => 'types[1]', 'Value' => ['Тариф не найден']],
                ],
                'title' => 'Ошибка валидации',
                'message' => 'Ошибка',
                'error' => null,
                'status' => 400,
            ],
        ]);

        $response = $this->makeResponse(200, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomValidationException');
        } catch (PecomValidationException $e) {
            $this->assertSame(400, $e->getCode());
            $this->assertSame('Ошибка валидации', $e->getTitle());
            $fieldErrors = $e->getFieldErrors();
            $this->assertSame(['Дата не существует'], $fieldErrors['plannedDateTime']);
            $this->assertSame(['Тариф не найден'], $fieldErrors['types[1]']);
        }
    }

    public function testSuccessfulHttp200ReturnsResponseWithoutException(): void
    {
        $body = json_encode(['data' => 'ok']);
        $response = $this->makeResponse(200, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $result = $client->sendRequest($this->makeRequest());
        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testBodyIsRestoredAfterRead(): void
    {
        $body = json_encode(['result' => 'success']);

        $stream = $this->createMock(StreamInterface::class);
        $stream->method('__toString')->willReturn($body);

        $restoredResponse = $this->createMock(ResponseInterface::class);
        $restoredResponse->method('getStatusCode')->willReturn(200);
        $restoredResponse->method('getBody')->willReturn($stream);
        $restoredResponse->method('withBody')->willReturnSelf();
        $restoredResponse->method('getHeaderLine')->with('Content-Type')->willReturn('application/json');

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturn($restoredResponse);
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('application/json');

        $client = new PecomErrorAwareHttpClient($this->makeClient($response));
        $result = $client->sendRequest($this->makeRequest());

        $this->assertSame($body, (string) $result->getBody());
    }

    public function testInvalidJsonBodyReturnsResponse(): void
    {
        $response = $this->makeResponse(200, 'not json at all');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $result = $client->sendRequest($this->makeRequest());
        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testErrorAsStringDoesNotThrowValidationException(): void
    {
        $body = json_encode(['error' => 'some string error']);
        $response = $this->makeResponse(200, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $result = $client->sendRequest($this->makeRequest());
        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testErrorObjectWithOnlyStatusFieldReturnsResponseWithoutException(): void
    {
        $body = json_encode(['error' => ['status' => 200]]);
        $response = $this->makeResponse(200, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $result = $client->sendRequest($this->makeRequest());
        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testEmptyBodyReturnsResponse(): void
    {
        $response = $this->makeResponse(200, '');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $result = $client->sendRequest($this->makeRequest());
        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testGenericApiErrorThrowsPecomApiException(): void
    {
        $body = json_encode([
            'error' => [
                'title' => 'Системная ошибка',
                'message' => 'Внутренняя ошибка сервера',
                'status' => 500,
                'fields' => [],
                'error' => null,
            ],
        ]);

        $response = $this->makeResponse(200, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $this->expectException(PecomApiException::class);
        $client->sendRequest($this->makeRequest());
    }

    public function testValidationExceptionHasGetFieldsAndGetResponse(): void
    {
        $fields = [
            ['Key' => 'plannedDateTime', 'Value' => ['Дата не существует']],
        ];
        $body = json_encode([
            'error' => [
                'fields' => $fields,
                'title' => 'Ошибка валидации',
                'message' => 'Ошибка',
                'status' => 400,
            ],
        ]);

        $response = $this->makeResponse(200, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomValidationException');
        } catch (PecomValidationException $e) {
            $this->assertSame($fields, $e->getFields());
            $this->assertInstanceOf(ResponseInterface::class, $e->getResponse());
        }
    }

    public function testHttp400WithoutBodyThrowsPecomValidationException(): void
    {
        $response = $this->makeResponse(400, '');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $this->expectException(PecomValidationException::class);
        $client->sendRequest($this->makeRequest());
    }

    public function testHttp400WithBrokenJsonThrowsPecomValidationException(): void
    {
        $response = $this->makeResponse(400, 'not-valid-json{{');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $this->expectException(PecomValidationException::class);
        $client->sendRequest($this->makeRequest());
    }

    public function testHttp400ResponseAccessibleViaGetResponse(): void
    {
        $response = $this->makeResponse(400, '');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomValidationException');
        } catch (PecomValidationException $e) {
            $this->assertSame(400, $e->getResponse()->getStatusCode());
        }
    }

    public function testHttp401ThrowsPecomApiExceptionWithStatusAndResponse(): void
    {
        $response = $this->makeResponse(401, '');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomApiException');
        } catch (PecomApiException $e) {
            $this->assertSame(401, $e->getCode());
            $this->assertSame(401, $e->getResponse()->getStatusCode());
        }
    }

    public function testHttp403ThrowsPecomApiExceptionWithStatusAndResponse(): void
    {
        $response = $this->makeResponse(403, '');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomApiException');
        } catch (PecomApiException $e) {
            $this->assertSame(403, $e->getCode());
            $this->assertSame(403, $e->getResponse()->getStatusCode());
        }
    }

    public function testHttp404ThrowsPecomApiExceptionWithStatusAndResponse(): void
    {
        $response = $this->makeResponse(404, '');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomApiException');
        } catch (PecomApiException $e) {
            $this->assertSame(404, $e->getCode());
            $this->assertSame(404, $e->getResponse()->getStatusCode());
        }
    }

    public function testHttp500WithJsonBodyThrowsPecomApiExceptionWithMessage(): void
    {
        $body = json_encode(['error' => ['message' => 'Внутренняя ошибка', 'title' => null, 'status' => 500, 'fields' => []]]);
        $response = $this->makeResponse(500, $body);
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomApiException');
        } catch (PecomApiException $e) {
            $this->assertSame('Внутренняя ошибка', $e->getMessage());
        }
    }

    public function testHttp500WithoutBodyThrowsPecomApiExceptionWithGeneratedMessage(): void
    {
        $response = $this->makeResponse(500, '');
        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        try {
            $client->sendRequest($this->makeRequest());
            $this->fail('Expected PecomApiException');
        } catch (PecomApiException $e) {
            $this->assertSame('PECOM API error (HTTP 500)', $e->getMessage());
        }
    }

    public function testSuccess200NonJsonBodyNotRead(): void
    {
        $stream = $this->createMock(StreamInterface::class);
        $stream->expects($this->never())->method('__toString');

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturnSelf();
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('application/pdf');

        $client = new PecomErrorAwareHttpClient($this->makeClient($response));
        $result = $client->sendRequest($this->makeRequest());

        $this->assertSame($response, $result);
    }

    public function testSuccess200MissingContentTypeBodyNotRead(): void
    {
        $stream = $this->createMock(StreamInterface::class);
        $stream->expects($this->never())->method('__toString');

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturnSelf();
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('');

        $client = new PecomErrorAwareHttpClient($this->makeClient($response));
        $result = $client->sendRequest($this->makeRequest());

        $this->assertSame($response, $result);
    }

    public function testSuccess200JsonWithoutErrorReturnsWrappedResponse(): void
    {
        $body = json_encode(['data' => 'ok']);
        $stream = $this->createMock(StreamInterface::class);
        $stream->method('__toString')->willReturn($body);

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturnSelf();
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('application/json');

        $client = new PecomErrorAwareHttpClient($this->makeClient($response));
        $result = $client->sendRequest($this->makeRequest());

        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testSuccess200JsonWithCharsetWithoutErrorReturnsResponse(): void
    {
        $body = json_encode(['result' => 'ok']);
        $stream = $this->createMock(StreamInterface::class);
        $stream->method('__toString')->willReturn($body);

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturnSelf();
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('application/json; charset=utf-8');

        $client = new PecomErrorAwareHttpClient($this->makeClient($response));
        $result = $client->sendRequest($this->makeRequest());

        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testSuccess200JsonWithCharsetAndValidationErrorThrows(): void
    {
        $body = json_encode([
            'error' => [
                'title' => 'Ошибка валидации',
                'message' => 'Ошибка',
                'status' => 400,
                'fields' => [['Key' => 'foo', 'Value' => ['bar']]],
            ],
        ]);
        $stream = $this->createMock(StreamInterface::class);
        $stream->method('__toString')->willReturn($body);

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturnSelf();
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('application/json; charset=utf-8');

        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $this->expectException(PecomValidationException::class);
        $client->sendRequest($this->makeRequest());
    }

    public function testHttp4xxWithoutContentTypeStillThrows(): void
    {
        $stream = $this->createMock(StreamInterface::class);
        $stream->method('__toString')->willReturn('');

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(404);
        $response->method('getBody')->willReturn($stream);
        $response->method('withBody')->willReturnSelf();
        $response->method('getHeaderLine')->with('Content-Type')->willReturn('');

        $client = new PecomErrorAwareHttpClient($this->makeClient($response));

        $this->expectException(PecomApiException::class);
        $client->sendRequest($this->makeRequest());
    }
}
