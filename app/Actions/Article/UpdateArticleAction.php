<?php

namespace App\Actions\Article;

use App\Models\Article;

class UpdateArticleAction
{
    public function handle(Article $article , $data)
    {
        return $article->update($data);
    }
}
