<?php

namespace App\Actions\User;

use App\Models\User;

class getAllUserAction
{
    public function handle()
    {
        return User::withCount('articles')->paginate(10);
    }
}
