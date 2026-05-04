<?php

declare(strict_types=1);

namespace glook\PecomSdk\Client;

use glook\PecomSdk\Generated\Client as GeneratedClient;

final class PecomClient
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
}
