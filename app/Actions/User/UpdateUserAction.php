<?php

namespace App\Actions\User;

use App\Models\User;

class UpdateUserAction
{
    public function handle(User $user , $data)
    {
        return $user->update($data);
    }
}
