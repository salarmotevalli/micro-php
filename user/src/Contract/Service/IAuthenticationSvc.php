<?php

namespace App\Contract\Service;

use App\Contract\Param\AuthenticationParam\LoginRequest;
use App\Contract\Param\AuthenticationParam\LoginResult;
use App\Contract\Param\AuthenticationParam\RegisterRequest;
use App\Contract\Param\AuthenticationParam\RegisterResult;
use App\Contract\Param\AuthenticationParam\VerifyResult;
use App\Entity\User;

interface IAuthenticationSvc
{
    /**
     * @param LoginRequest $request
     * @return LoginResult
     */
    public function login(LoginRequest $request): LoginResult;

    /**
     * @param RegisterRequest $request
     * @return RegisterResult
     */
    public function register(RegisterRequest $request): RegisterResult;

    /**
     * @param User $user
     * @return void
     */
    public function logout(User $user): void;

    /**
     * @param User $user
     * @return bool
     */
    public function verify(string $token, User $user): VerifyResult;
}