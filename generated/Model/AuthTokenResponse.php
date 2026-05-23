<?php

namespace glook\PecomSdk\Generated\Model;

class AuthTokenResponse
{
    /**
     * Токен для авторизации.
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Дата и время (всегда по времени UTC), по которую действует сгенерированный токен Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string
     */
    protected $expiresIn;

    /**
     * Дата и время в формате Unix-time, по которую действует сгенерированный токен. Подробнее о формате: https://i-leon.ru/tools/time).
     *
     * @var string
     */
    protected $expiresInUnix;

    /**
     * Тип токена. В настоящее время используется `Bearer`.
     *
     * @var string
     */
    protected $tokenType;

    /**
     * Токен для авторизации.
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Токен для авторизации.
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Дата и время (всегда по времени UTC), по которую действует сгенерированный токен Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getExpiresIn(): string
    {
        return $this->expiresIn;
    }

    /**
     * Дата и время (всегда по времени UTC), по которую действует сгенерированный токен Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setExpiresIn(string $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    /**
     * Дата и время в формате Unix-time, по которую действует сгенерированный токен. Подробнее о формате: https://i-leon.ru/tools/time).
     */
    public function getExpiresInUnix(): string
    {
        return $this->expiresInUnix;
    }

    /**
     * Дата и время в формате Unix-time, по которую действует сгенерированный токен. Подробнее о формате: https://i-leon.ru/tools/time).
     */
    public function setExpiresInUnix(string $expiresInUnix): self
    {
        $this->expiresInUnix = $expiresInUnix;

        return $this;
    }

    /**
     * Тип токена. В настоящее время используется `Bearer`.
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * Тип токена. В настоящее время используется `Bearer`.
     */
    public function setTokenType(string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }
}
