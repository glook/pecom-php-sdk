<?php

declare(strict_types=1);

namespace glook\PecomSdk\Client;

use glook\PecomSdk\Generated\Authentication\BasicAuthAuthentication;
use glook\PecomSdk\Generated\Client as GeneratedClient;
use glook\PecomSdk\Http\PecomErrorAwareHttpClient;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;

class PecomClientFactory
{
    public static function create(
        string $login,
        string $password,
        ?ClientInterface $httpClient = null
    ): PecomClient {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $errorAwareClient = new PecomErrorAwareHttpClient($httpClient);

        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://kabinet.pecom.ru/api/v1');
        $plugins = [
            new AddHostPlugin($uri),
            new AddPathPlugin($uri),
            new AuthenticationRegistry([
                new BasicAuthAuthentication($login, $password),
            ]),
        ];

        $pluginClient = new PluginClient($errorAwareClient, $plugins);
        $generatedClient = GeneratedClient::create($pluginClient);

        return new PecomClient($generatedClient);
    }
}
