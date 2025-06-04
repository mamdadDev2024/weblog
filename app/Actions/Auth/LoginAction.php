<?php

namespace App\Actions\Auth;

use Illuminate\Support\Facades\Auth;

class LoginAction
{
    public function handle($data)
    {
        if (Auth::attempt($data , true))
        {
            return redirect()->route("home");
        }
    }
}
