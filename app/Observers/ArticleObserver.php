<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Str;

class ArticleObserver
{
    public function creating(Article $article): void
    {
        $slug = Str::slug($article->title);
        $count = Article::where('slug', 'LIKE', "{$slug}%")->count();
        $article->slug = $count ? "{$slug}-{$count}" : $slug;
    }

    public function updating(Article $article): void
    {
        if ($article->isDirty('title')) {
            $slug = Str::slug($article->title);
            $count = Article::where('slug', 'LIKE', "{$slug}%")->where('id', '!=', $article->id)->count();
            $article->slug = $count ? "{$slug}-{$count}" : $slug;
        }
    }
}
