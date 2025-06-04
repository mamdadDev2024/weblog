<?php

namespace App\Actions\Article;

use App\Models\Article;

class getAllArticleAction
{
    public function handle()
    {
        return Article::with('user')->paginate(10);
    }
}
