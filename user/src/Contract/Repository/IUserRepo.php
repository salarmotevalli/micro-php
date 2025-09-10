<?php

namespace App\Contract\Repository;

use App\Entity\User;
use App\Exception\NotFound;

interface IUserRepo {

    /**
     * @param int $id
     * @return User
     * @throws NotFound
     */
    public function getById(int $id): User;

    /**
     * @param string $email
     * @return User
     */
    public function getByEmail(string $email): ?User;

    /**
     * @param User $user
     * @return User
     */
    public function store(User $user): User;

    /**
     * @param User $user
     * @return User
     */
    public function update(User $user): User;
} 
