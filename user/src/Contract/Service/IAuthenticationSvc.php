<?php

namespace App\Contract\Service;

use App\Contract\Param\AuthenticationParam\LoginRequest;
use App\Contract\Param\AuthenticationParam\LoginResult;
use App\Contract\Param\AuthenticationParam\RegisterRequest;
use App\Contract\Param\AuthenticationParam\RegisterResult;

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
     * @return void
     */
    public function logout(): void;

}