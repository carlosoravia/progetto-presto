<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        //! Schema, hai la tabella categories al tuo interno?
        //! Se Schema trova la tabella categories all'interno del DB allora voglio che prendi tutte le categorie dal DB e le propaghi con View:share

        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            View::share('categories', $categories);
            //! in questo modo ho le categories in tutte le viste
        }
        //! al posto di usare tailwind utilizzo bootstrap
        Paginator::useBootstrap();
    }
}
