<?php

namespace App\Actions\User;

use App\Models\User;

class getUserAction
{
    public function handle(User $user)
    {
        return $user->withCount('user')->first();
    }
}
