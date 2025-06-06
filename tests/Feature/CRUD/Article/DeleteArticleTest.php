<?php

use App\Models\Article;
use App\Models\User;

test('delete article test', function () {
    $user = User::factory()->create();
    $article = Article::factory()->for($user)->create();
    $this->assertCount(1, $user->articles);
    $article->delete();
    $this->assertCount(0, $user->fresh()->articles);

});
