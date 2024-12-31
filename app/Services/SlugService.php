<?php

namespace App\Services;

use Illuminate\Support\Str;

class SlugService
{
    public function createSlug(string $title): string
    {
        $slug = Str::slug($title);
        $count = \App\Models\Article::where('slug', 'LIKE', "{$slug}%")->count();
        $slug = $count ? "{$slug}-{$count}" : $slug;
        
        return $slug;
    }
}
