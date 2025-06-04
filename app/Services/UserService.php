<?php

namespace App\Services;

use App\Actions\User\CreateUserAction;
use App\Actions\User\getAllUserAction;
use App\Actions\User\getUserAction;
use App\Actions\User\UpdateUserAction;
use App\Actions\User\DeleteUserAction;
use App\Models\User;

class UserService
{
    public function __construct(private CreateUserAction $createUserAction , private UpdateUserAction $updateUserAction , private DeleteUserAction $DeleteAticleAction , private getUserAction $getUserAction , private getAllUserAction $getAllUserAction){}
    public function create($data)
    {
        return $this->createUserAction->handle($data);
    }
    public function update($user , $data)
    {
        return $this->updateUserAction->handle($user , $data);
    }
    public function delete($user)
    {
        return $this->DeleteAticleAction->handle($user);
    }

    public function index()
    {
        return $this->getAllUserAction->handle();
    }

    public function get(User $user)
    {
        return $this->getUserAction->handle($user);
    }
}

