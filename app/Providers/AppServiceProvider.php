<?php

namespace App\Providers;
use App\Models\ItemDetail;
use App\Models\Category;
use App\Models\City;
use App\Models\University;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');

        Paginator::useBootstrap();
        $categories = DB::select('SELECT cat.name as name, cat.id as id
                                FROM categories cat');
        view()->share('publishedCategories',$categories);

        $cities = DB::select('SELECT ct.name as name, ct.id as id
                                FROM cities ct');
        view()->share('publishedCities',$cities);


        $universities = DB::select('SELECT un.name as name, un.id as id
                                FROM universities un');
        view()->share('publishedUniversities',$universities);
     }
    
}
