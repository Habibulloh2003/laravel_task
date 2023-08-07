<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();

        return view('articles', [
            "articles" => $articles
        ]);
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);

        return view('articles', [
            "articles" => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article_m = Article::where('slug', $id);
        $article_m->increment('views');
        $article = $article_m->firstOrFail();

        return view('article', [
            "article" => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
