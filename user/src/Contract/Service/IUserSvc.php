<?php

namespace App\Contract\Service;

use App\Entity\User;

interface IUserSvc
{
    public function getById(int $id): User;
    public function store(User $user): User;
    public function update(User $user): User;
}