<?php

namespace App\Contract\Param\AuthenticationParam;

readonly class LoginResult
{
    public function __construct(
        public string $accessToken,
    )
    {   
    }
}