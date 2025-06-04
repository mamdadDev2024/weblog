<?php

namespace App\Actions\Article;

use Illuminate\Support\Facades\Auth;

class CreateArticleAction
{
    public function handle(array $data)
    {
        return Auth::user()->articles->create($data);
    }
}
