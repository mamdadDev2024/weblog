<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    public function __construct(private ArticleService $service){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = $this->service->index();
        return view("Article.Index", compact("articles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();
        return $this->service->create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article = $this->service->get($article);
        return view("Article.Show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view("Article.Update", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        return $this->service->update($article, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $this->service->delete($article);
        return redirect()->route('home');
    }
}
