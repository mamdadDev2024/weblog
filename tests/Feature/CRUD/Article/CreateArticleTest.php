<?php

use App\Models\Article;
use App\Models\User;

test('create article for a user', function () {
    $user = User::factory()->has(Article::factory()->count(2))->create();
    $articles = $user->articles()->get();
    $this->assertCount(2, $articles);
});
