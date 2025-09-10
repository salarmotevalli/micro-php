<?php

namespace App\Service;

use App\Contract\Param\AuthenticationParam\LoginRequest;
use App\Contract\Param\AuthenticationParam\LoginResult;
use App\Contract\Param\AuthenticationParam\RegisterRequest;
use App\Contract\Param\AuthenticationParam\RegisterResult;
use App\Contract\Param\AuthenticationParam\VerifyResult;
use App\Contract\Repository\IUserRepo;
use App\Contract\Service\IAuthenticationSvc;
use App\Entity\User;
use App\Exception\Forbbiden;
use App\Exception\NotFound;
use App\Exception\Unauthorized;

class AuthenticationSvc implements IAuthenticationSvc {
    public function __construct(
        private IUserRepo $userRepo
    )
    {
    }
    
    public function login(LoginRequest $request): LoginResult {
        $user = $this->userRepo->getByEmail($request->email);
        
        if (!$user) {
            throw new NotFound();
        }
        
        if ($user->hashedPassword != password_hash($request->password)) {
            throw new Unauthorized();
        }
        
        // TODO: create jwt token
        $token = 'example_token';

        return new LoginResult($token);
    }

    public function register(RegisterRequest $request): RegisterResult {
        $user = $this->userRepo->getByEmail($request->email);

        if (!$user) {
            throw new Forbbiden();
        }

        $user = new User(
            id: 0, 
            email: $request->email, 
            hashedPassword: password_hash($request->password), 
            username: $request->username
        );
        
        $user = $this->userRepo->store($user);

        // TODO: create jwt token
        $token = 'example_token';

        return new RegisterResult($token);
    }
    
    public function logout(User $user): void {
        // TODO
    }
    
    public function verify(string $token, User $user): VerifyResult {
        // TODO
        return new VerifyResult(false);
    }
    
}