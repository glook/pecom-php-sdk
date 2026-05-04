<?php

declare(strict_types=1);

namespace glook\PecomSdk\Exception;

use Psr\Http\Message\ResponseInterface;

final class PecomValidationException extends PecomApiException
{
    /** @var array */
    private $fields;

    public function __construct(
        string $message,
        int $code,
        ?string $title,
        array $fields,
        array $payload,
        ResponseInterface $response
    ) {
        parent::__construct($message, $code, $title, $payload, $response);
        $this->fields = $fields;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getFieldErrors(): array
    {
        $result = [];
        foreach ($this->fields as $field) {
            if (!is_array($field)) {
                continue;
            }
            if (!isset($field['Key']) || !is_string($field['Key'])) {
                continue;
            }
            $values = isset($field['Value']) && is_array($field['Value']) ? $field['Value'] : [];
            $strings = [];
            foreach ($values as $v) {
                if (is_string($v)) {
                    $strings[] = $v;
                }
            }
            $result[$field['Key']] = $strings;
        }

        return $result;
    }
}
