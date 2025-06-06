<?php

use App\Models\Article;
use App\Models\User;
use function PHPUnit\Framework\assertEquals;

test('get a article', function () {
    $user = User::factory()->create();
    $article = Article::factory()->for($user)->create();
    $this->assertEquals($user->articles()->first() , $article);
});
