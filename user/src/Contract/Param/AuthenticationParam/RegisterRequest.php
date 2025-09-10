<?php

namespace App\Contract\Param\AuthenticationParam;

readonly class RegisterRequest
{
    public function __construct(
        public string $username,
        public string $email,
        public string $password,
    )
    {
    }
}