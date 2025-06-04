<?php

namespace App\Actions\Article;

use App\Models\Article;

class DeleteArticleAction
{
    public function handle(Article $article)
    {
        return $article->delete();
    }
}
