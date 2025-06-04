<?php

namespace App\Actions\Article;

use App\Models\Article;

class getArticleAction
{
    public function handle(Article $article)
    {
        return $article->with('user')->first();
    }
}
