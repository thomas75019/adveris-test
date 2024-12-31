<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Article;
use App\Observers\ArticleObserver;
use App\Policies\ArticlePolicy;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Article::observe(ArticleObserver::class);
    }
}
