<?php

namespace App\Actions\User;

use App\Models\User;

class CreateUserAction
{
    public function handle(array $data)
    {
        return new User($data)->save();
    }
}
