<?php

namespace App\Observers;

use App\Models\Article;
use App\Services\SlugService;

class ArticleObserver
{
    protected SlugService $slugService;

    public function __construct(SlugService $slugService)
    {
        $this->slugService = $slugService;
    }

    public function creating(Article $article): void
    {
        $slug = $this->slugService->createSlug($article->title);

        $article->slug = $slug;
    }

    public function updating(Article $article): void
    {
        if ($article->isDirty('title')) {
            $slug = $this->slugService->createSlug($article->title);

            $article->slug = $slug;
        }
    }
}
