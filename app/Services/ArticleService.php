<?php

namespace App\Services;

use App\Actions\Article\CreateArticleAction;
use App\Actions\Article\getAllArticleAction;
use App\Actions\Article\getArticleAction;
use App\Actions\Article\UpdateArticleAction;
use App\Actions\Article\DeleteArticleAction;
use App\Models\Article;

class ArticleService
{
    public function __construct(private CreateArticleAction $createArticleAction , private UpdateArticleAction $updateArticleAction , private DeleteArticleAction $DeleteAticleAction , private getArticleAction $getArticleAction , private getAllArticleAction $getAllArticleAction){}
    public function create($data)
    {
        return $this->createArticleAction->handle($data);
    }
    public function update($article , $data)
    {
        return $this->updateArticleAction->handle($article , $data);
    }
    public function delete($article)
    {
        return $this->DeleteAticleAction->handle($article);
    }

    public function index()
    {
        return $this->getAllArticleAction->handle();
    }

    public function get(Article $article)
    {
        return $this->getArticleAction->handle($article);
    }
}

