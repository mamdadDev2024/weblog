<?php

namespace App\Actions\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterAction
{
    public function handle($data)
    {
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route("home");
    }
}
