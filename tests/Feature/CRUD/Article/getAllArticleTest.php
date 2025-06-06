<?php

use App\Models\Article;
use App\Models\User;

test('get all articles', function () {
    $user = User::factory()->create();
    $articles = Article::factory()->for($user)->count(3)->create();
    $this->assertCount(3, $articles->fresh()->count());
});
