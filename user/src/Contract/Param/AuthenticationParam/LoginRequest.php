<?php

namespace App\Contract\Param\AuthenticationParam;

readonly class LoginRequest
{
    public function __construct(
        public string $email,
        public string $password,
    )
    {
    }
}
