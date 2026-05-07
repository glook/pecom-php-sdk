# glook/pecom-sdk

PHP SDK для работы с API транспортной компании ПЭК (`https://kabinet.pecom.ru/api/v1`).

Низкоуровневый клиент сгенерирован из OpenAPI 3.0.3 спецификации через [Jane](https://github.com/janephp/janephp). Поверх него добавлен ручной фасад, который скрывает детали HTTP, аутентификации и обработки ошибок.

## Требования

- PHP `^7.2 || ^8.0`
- расширение `ext-json`
- любой PSR-18 HTTP-клиент (например, `symfony/http-client`, `guzzlehttp/guzzle`, `php-http/curl-client`) — будет найден автоматически через `php-http/discovery`

## Установка

```bash
composer require glook/pecom-sdk
```

Если в проекте ещё нет PSR-18 клиента, добавьте любой:

```bash
composer require symfony/http-client nyholm/psr7
```

## Быстрый старт

```php
<?php

use glook\PecomSdk\Client\PecomClientFactory;
use glook\PecomSdk\Exception\PecomApiException;
use glook\PecomSdk\Exception\PecomValidationException;

require __DIR__ . '/vendor/autoload.php';

$client = PecomClientFactory::create('your_login', 'your_password');

try {
    $branches = $client->raw()->branchesAll();
    foreach ($branches as $branch) {
        echo $branch->getTitle() . PHP_EOL;
    }
} catch (PecomValidationException $e) {
    // 4xx — невалидные данные запроса
    echo 'Validation error: ' . $e->getMessage();
    print_r($e->getPayload());
} catch (PecomApiException $e) {
    // прочие ошибки API ПЭК
    echo 'API error: ' . $e->getMessage();
}
```

`PecomClientFactory::create()` принимает третий необязательный аргумент — собственный `Psr\Http\Client\ClientInterface`, если автодискавери не подходит:

```php
$client = PecomClientFactory::create($login, $password, $myHttpClient);
```

## Архитектура

```text
src/
  Client/
    PecomClient.php           # фасад поверх Generated\Client
    PecomClientFactory.php    # сборка HTTP-стека и аутентификации
  Http/
    PecomErrorAwareHttpClient.php   # PSR-18 декоратор: бросает Pecom*Exception
  Exception/
    PecomApiException.php
    PecomValidationException.php

generated/                     # Jane-сгенерированный код, namespace glook\PecomSdk\Generated
  Client.php
  Endpoint/
  Model/
  Normalizer/
  Runtime/
  Authentication/
  Exception/
```

- Ручной код живёт в `src/` под `glook\PecomSdk\*`.
- Generated-код живёт в `generated/` под `glook\PecomSdk\Generated\*` и считается **disposable** — его можно безопасно удалить и перегенерировать.
- Прямой доступ к низкоуровневому клиенту: `$client->raw()` → `glook\PecomSdk\Generated\Client`.

## Аутентификация

API ПЭК использует **Basic Auth** (логин и пароль личного кабинета). Они передаются в `PecomClientFactory::create()` и автоматически добавляются в каждый запрос через `AuthenticationRegistry` + `BasicAuthAuthentication`.

## Обработка ошибок

`PecomErrorAwareHttpClient` оборачивает PSR-18 клиент и анализирует ответы API ПЭК:

| HTTP статус | Исключение |
|-------------|------------|
| `4xx` (валидация) | `PecomValidationException` |
| прочие ошибки | `PecomApiException` |

Оба исключения расширяют `RuntimeException` и предоставляют:

- `getMessage()` / `getCode()` — стандартные методы исключения
- `getTitle()` — заголовок ошибки от ПЭК (если есть)
- `getPayload()` — массив с телом ответа
- `getResponse()` — оригинальный `Psr\Http\Message\ResponseInterface`

## Регенерация SDK

OpenAPI-спецификация лежит в корне монорепы (`dist/pecom.json`), собирается через `npm run build` в корне проекта.

После обновления спецификации:

```bash
cd packages/php-sdk
composer generate
```

Скрипт:

1. запускает `jane-openapi generate --config-file=jane-config.php`;
2. полностью пересоздаёт `generated/` (опция `clean-generated`);
3. вызывает `composer dump-autoload`.

Конфигурация Jane — в `jane-config.php`. Изменения в `generated/` руками не делать — будут потеряны при следующей генерации.

## Разработка

```bash
# тесты
vendor/bin/phpunit

# code style
composer cs
```

## Breaking Changes

### Обработка HTTP-ошибок (текущая версия)

- **`PecomErrorAwareHttpClient`**: HTTP-ответы со статусами `4xx`/`5xx` теперь кидают
  `PecomApiException` (или `PecomValidationException` для 400).
  Потребители, ожидавшие возврат `ResponseInterface` при ошибочных HTTP-статусах,
  должны перейти на `catch (PecomApiException $e)` и использовать `$e->getResponse()`
  для получения оригинального ответа.

- **`PecomApiException`** теперь реализует `Psr\Http\Client\ClientExceptionInterface`.
  Стандартные плагины HTTPlug (`ErrorPlugin`, `RetryPlugin`, `HistoryPlugin`)
  теперь корректно обрабатывают эти исключения как HTTP-ошибки.
