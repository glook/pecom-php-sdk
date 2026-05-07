<?php

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Exception;

use glook\PecomSdk\Exception\PecomApiException;
use glook\PecomSdk\Exception\PecomValidationException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

class PecomApiExceptionTest extends TestCase
{
    private function makeException(): PecomApiException
    {
        return new PecomApiException('msg', 500, null, [], $this->createMock(ResponseInterface::class));
    }

    public function testImplementsClientExceptionInterface(): void
    {
        $this->assertInstanceOf(ClientExceptionInterface::class, $this->makeException());
    }

    public function testPecomValidationExceptionAlsoImplementsClientExceptionInterface(): void
    {
        $ex = new PecomValidationException('msg', 400, null, [], [], $this->createMock(ResponseInterface::class));
        $this->assertInstanceOf(ClientExceptionInterface::class, $ex);
    }
}
