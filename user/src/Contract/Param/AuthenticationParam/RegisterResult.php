<?php

namespace App\Contract\Param\AuthenticationParam;

readonly class RegisterResult
{
    public function __construct(
        public string $accessToken,
    )
    {
    }
}