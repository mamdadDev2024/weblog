<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(private AuthService $service){}

    public function login(UserLoginRequest $request)
    {
        $data = $request->validated();
        return $this->service->login($data);
    }
    public function logout(){
        return $this->service->logout();
    }
    public function register(UserRegisterRequest $request)
    {
        $data = $request->validated();
        return $this->service->register($data);
    }
}
