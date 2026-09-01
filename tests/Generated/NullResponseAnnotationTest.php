<?php

/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 */

declare(strict_types=1);

namespace glook\PecomSdk\Tests\Generated;

use glook\PecomSdk\Generated\Client as GeneratedClient;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class NullResponseAnnotationTest extends TestCase
{
    public function testGeneratedClientDoesNotDeclareUnreachableNull(): void
    {
        $methods = array_filter(
            (new \ReflectionClass(GeneratedClient::class))->getMethods(\ReflectionMethod::IS_PUBLIC),
            function (\ReflectionMethod $method): bool {
                return GeneratedClient::class === $method->getDeclaringClass()->getName();
            }
        );
        $nullableMethods = [];
        $operationCount = 0;

        foreach ($methods as $method) {
            $docComment = $method->getDocComment();

            if (false === $docComment || false === strpos($docComment, '@return')) {
                continue;
            }

            ++$operationCount;

            if (preg_match('/@return[^\r\n]*\bnull\b/', $docComment)) {
                $nullableMethods[] = $method->getName();
            }
        }

        self::assertGreaterThan(0, $operationCount);
        self::assertSame([], $nullableMethods);
    }

    public function testGeneratorKeepsReachableNullWithoutUnexpectedStatusException(): void
    {
        if (!is_file(dirname(__DIR__, 2).'/vendor/bin/jane-openapi')) {
            self::markTestSkipped('Генератор Jane не установлен в runtime-only окружении');
        }

        $temporaryDirectory = $this->createTemporaryDirectory();

        try {
            $clientSource = $this->generateClientWithoutUnexpectedStatusException($temporaryDirectory);
            preg_match_all('/@return[^\r\n]*/', $clientSource, $returnDocs);

            self::assertNotEmpty($returnDocs[0]);
            self::assertSame(
                [],
                array_values(array_filter($returnDocs[0], function (string $returnDoc): bool {
                    return false === strpos($returnDoc, 'null');
                }))
            );
        } finally {
            $this->removeDirectory($temporaryDirectory);
        }
    }

    private function generateClientWithoutUnexpectedStatusException(string $temporaryDirectory): string
    {
        $packageDirectory = dirname(__DIR__, 2);
        $configFile = $temporaryDirectory.'/jane-config.php';
        $generatedDirectory = $temporaryDirectory.'/generated';
        $openApiFile = $temporaryDirectory.'/openapi.json';
        $openApi = [
            'openapi' => '3.0.3',
            'info' => [
                'title' => 'Test API',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/value' => [
                    'get' => [
                        'operationId' => 'getValue',
                        'responses' => [
                            '200' => [
                                'description' => 'Успешный ответ',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'value' => ['type' => 'string'],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];
        $config = [
            'openapi-file' => $openApiFile,
            'namespace' => 'glook\PecomSdk\GeneratedWithoutUnexpectedStatusException',
            'directory' => $generatedDirectory,
            'strict' => true,
            'skip-null-values' => true,
            'skip-required-fields' => false,
            'throw-unexpected-status-code' => false,
            'clean-generated' => true,
            'use-fixer' => false,
        ];

        if (false === file_put_contents($openApiFile, json_encode($openApi, JSON_THROW_ON_ERROR))) {
            throw new \RuntimeException('Не удалось создать временную OpenAPI-схему');
        }

        if (false === file_put_contents($configFile, "<?php\n\nreturn ".var_export($config, true).";\n")) {
            throw new \RuntimeException('Не удалось создать временную конфигурацию Jane');
        }

        $output = [];
        $exitCode = 0;
        exec(sprintf(
            '%s %s generate --config-file=%s 2>&1',
            escapeshellarg(PHP_BINARY),
            escapeshellarg($packageDirectory.'/vendor/bin/jane-openapi'),
            escapeshellarg($configFile)
        ), $output, $exitCode);

        if (0 !== $exitCode) {
            throw new \RuntimeException("Не удалось сгенерировать тестовый клиент:\n".implode("\n", $output));
        }

        $clientSource = file_get_contents($generatedDirectory.'/Client.php');

        if (false === $clientSource) {
            throw new \RuntimeException('Не удалось прочитать сгенерированный тестовый клиент');
        }

        return $clientSource;
    }

    private function createTemporaryDirectory(): string
    {
        $directory = sys_get_temp_dir().'/pecom-sdk-null-response-'.bin2hex(random_bytes(8));

        if (!mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new \RuntimeException('Не удалось создать временный каталог для Jane');
        }

        return $directory;
    }

    private function removeDirectory(string $directory): void
    {
        if (!is_dir($directory)) {
            return;
        }

        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $file) {
            if ($file->isDir()) {
                rmdir($file->getPathname());
            } else {
                unlink($file->getPathname());
            }
        }

        rmdir($directory);
    }
}
