<?php

namespace App\Actions\User;

use App\Models\User;

class DeleteUserAction
{
    public function handle(User $user)
    {
        return $user->delete();
    }
}
