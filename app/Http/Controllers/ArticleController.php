<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        //! prendo le categorie del db e le passo alla vista - oppure nell'AppServiceProvider creo una funzionalià nella funzione boot
        return view('article.create');
    }

    public function index()
    {
        // $articles = Article::all();
        //! limito il numero di annunci visibili per pagina
        //!TODO: come faccio ad ordinarli dal più recente al meno recente?
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'DESC')->paginate(4);
        return view('article.index', compact('articles'));
    }

    //! Devo passargli il model così si prende gli articoli dal DB
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function getContactPage()
    {
        return view('contact');
    }

    public function getTableEdit()
    {
        $articles = Article::all();
        return view('article.table-edit ', compact('articles'));
    }
}
