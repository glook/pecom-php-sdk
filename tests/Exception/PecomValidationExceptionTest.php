<?php

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Exception;

use glook\PecomSdk\Exception\PecomValidationException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class PecomValidationExceptionTest extends TestCase
{
    private function makeException(array $fields): PecomValidationException
    {
        $response = $this->createMock(ResponseInterface::class);

        return new PecomValidationException('Ошибка', 400, 'Ошибка валидации', $fields, [], $response);
    }

    public function testGetFieldErrorsMapsKeyValuePairs(): void
    {
        $e = $this->makeException([
            ['Key' => 'field1', 'Value' => ['Error 1', 'Error 2']],
            ['Key' => 'field2', 'Value' => ['Error 3']],
        ]);

        $errors = $e->getFieldErrors();
        $this->assertSame(['Error 1', 'Error 2'], $errors['field1']);
        $this->assertSame(['Error 3'], $errors['field2']);
    }

    public function testGetFieldErrorsSkipsNonArrayItems(): void
    {
        $e = $this->makeException([
            'not an array',
            ['Key' => 'valid', 'Value' => ['ok']],
        ]);

        $errors = $e->getFieldErrors();
        $this->assertArrayNotHasKey(0, $errors);
        $this->assertSame(['ok'], $errors['valid']);
    }

    public function testGetFieldErrorsSkipsItemsWithoutStringKey(): void
    {
        $e = $this->makeException([
            ['Value' => ['no key here']],
            ['Key' => 123, 'Value' => ['int key']],
            ['Key' => 'valid', 'Value' => ['ok']],
        ]);

        $errors = $e->getFieldErrors();
        $this->assertCount(1, $errors);
        $this->assertSame(['ok'], $errors['valid']);
    }

    public function testGetFieldErrorsWithNonArrayValueTreatsAsEmpty(): void
    {
        $e = $this->makeException([
            ['Key' => 'field1', 'Value' => 'not an array'],
        ]);

        $errors = $e->getFieldErrors();
        $this->assertSame([], $errors['field1']);
    }

    public function testGetFieldErrorsFiltersNonStringValues(): void
    {
        $e = $this->makeException([
            ['Key' => 'field1', 'Value' => ['valid string', 123, null, 'another string']],
        ]);

        $errors = $e->getFieldErrors();
        $this->assertSame(['valid string', 'another string'], $errors['field1']);
    }

    public function testGetFieldErrorsEmptyFieldsReturnsEmptyArray(): void
    {
        $e = $this->makeException([]);

        $this->assertSame([], $e->getFieldErrors());
    }
}
