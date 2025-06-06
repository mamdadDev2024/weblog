<?php

use App\Models\Article;
use App\Models\User;

test('update article test', function () {
    $user = User::factory()->create();
    $article = Article::factory()->for($user)->create([
        'title' => 'original title'
    ]);

    $article->update([
        'title' => 'test title'
    ]);

    $this->assertNotEquals('original title', $article->fresh()->title);
    $this->assertEquals('test title', $article->fresh()->title);
});
