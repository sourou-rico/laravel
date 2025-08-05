<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

// class ArticlesController extends Controller
// {
//     //
// }

class ArticlesController extends Controller
{
    // public function index()
    // {
    //     $articles = [
    //         ['title' => 'titre article 1', 'body' => 'Contenu de l\'article 1'],
    //         ['title' => 'titre article 2', 'body' => 'Contenu de l\'article 2'],
    //         ['title' => 'titre article 3', 'body' => 'Contenu de l\'article 3'],
    //     ];

    //     return view('layouts.articles', compact('articles'));
    // }

    public function index(){
        $articles= Article::with('user')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('articles.articles', compact('articles'));
    }

//     public function show($id)
// {

//     $article = Article::with(['comments' => function ($query) {
//         $query->with('user');
//     }])->findOrFail($id);
//     return view('articles.show', compact('article'));
// }

public function show(Article $article)
{
    return view('articles.show', compact('article'));
}

    /**
     * Affiche le formulaire de création d'un article
     */
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
    
}
