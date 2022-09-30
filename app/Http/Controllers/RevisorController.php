<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Article;


use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $articleToCheck = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('articleToCheck'));
    }

    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', 'Hai accettato l\'annuncio');
    }

    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'La tua richiesta è stata inoltrata');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor',["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti! Sei diventato Revisore');
    }

    public function getTableRevisor()
    {
        $articles = Article::all();
        return view('revisor.table ', compact('articles'));
    }
}

