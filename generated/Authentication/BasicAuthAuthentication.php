<?php

namespace glook\PecomSdk\Generated\Authentication;

use Jane\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

class BasicAuthAuthentication implements AuthenticationPlugin
{
    private $username;
    private $password;

    public function __construct(string $username, string $password)
    {
        $this->{'username'} = $username;
        $this->{'password'} = $password;
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        $header = sprintf('Basic %s', base64_encode(sprintf('%s:%s', $this->{'username'}, $this->{'password'})));

        return $request->withHeader('Authorization', $header);
    }

    public function getScope(): string
    {
        return 'BasicAuth';
    }
}
