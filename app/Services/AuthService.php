<?php

namespace App\Services;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;
use App\Actions\Auth\RegisterAction;

class AuthService
{
    public function __construct(private LoginAction $loginAction , private LogoutAction $logoutAction , private RegisterAction $registerAction){}

    public function login($data)
    {
        return $this->loginAction->handle($data);
    }
    public function logout()
    {
        return $this->logoutAction->handle();
    }
    public function register(array $data)
    {
        return $this->registerAction->handle($data);
    }
}

