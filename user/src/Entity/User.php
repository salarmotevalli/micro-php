<?php

namespace App\Entity;

final class User {
    public function __construct(
        public int $id,
        public ?string $username,
        public ?string $hashedPassword,
        public ?string $email,
  ) 
  {}
}
