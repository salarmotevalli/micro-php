<?php

namespace App\Contract\Param\AuthenticationParam;

readonly class VerifyResult
{
    public function __construct(
        public bool $verified,
        public ?int $id = null,
        public ?string $email = null,
    )
    {   
    }
}