<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Article::all();

        return view('dashboard', compact('articles'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        $article = new Article($request->validated());
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug): View
    {

        $article = Article::where('slug', $slug)->firstOrFail();

        return view('articles.edit', compact('article'));
    }

    public function create(): View
    {
        return view('articles.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, string $slug): RedirectResponse
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->update($request->validated());

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index');
    }
}
