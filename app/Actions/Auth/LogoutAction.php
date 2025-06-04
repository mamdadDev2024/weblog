<?php

namespace App\Actions\Auth;

use Illuminate\Support\Facades\Auth;

class LogoutAction
{
    public function handle()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
