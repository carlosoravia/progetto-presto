<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/article/{article}/show', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/create', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');

Route::get('/contatti', [ArticleController::class, 'getContactPage'])->name('contact');

Route::get('/category/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');

Route::get('/article/table-edit', [ArticleController::class, 'getTableEdit'])->name('article.table-edit');

Route::get('/choice/page', [FrontController::class, 'choose'])->name('choose');


//Middleware revisore
Route::middleware(['isRevisor'])->group(function () {

    // Rotte revisore
    Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

    // Rotta tabella revisore
    Route::get('/revisor/table', [RevisorController::class, 'getTableRevisor'])->name('revisor.table');

    Route::patch('/accept/article/{article}', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');

    Route::patch('/reject/article/{article}', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    //Fine rotte revisore
});



//Richiedi di diventare revisore
Route::get('/request/revisor',[RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/made/revisor/{user}',[RevisorController::class, 'makeRevisor'])->name('make.revisor');

//Ricerca annuncio
Route::get('/article/search',[FrontController::class, 'searchArticle'])->name('article.search');

//CAMBIO LINGUA
Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('set_language_locale');



