<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'DESC')->take(4)->get();
        return view('home', compact('articles'));
    }

    public function categoryShow(Category $category)
    {
        // $articles = Article::where('category_id', $category->id)->orderBy('created_at', 'DESC')->get();
        $articles = Article::where('category_id', $category->id)->where('is_accepted', true)->orderBy('created_at', 'DESC')->get();
        // per i filtri usare where e prende in entrata due parametri//
        return view('categoryShow', compact('articles', 'category'));
    }

    public function searchArticle(Request $request)
    {
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(4);

        return view('article.index', compact('articles'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale',$lang);
        return redirect()->back();
    }

    public function choose(){
        return view('choose');
    }
}
