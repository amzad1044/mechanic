<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Mechanic;
use App\Category;
use App\Area;
use App\Hiredlabour;
use View;

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

        View::composer('front.inc.header',function($view){
            $view->with('cats',Category::where('status',1)->get());
        });

        View::composer('front.inc.header',function($view){
            $view->with('areas',Area::where('status',1)->get());
        });

        //Side category and area
        View::composer('front.mechanic.side',function($view){
            $view->with('cats',Category::where('status',1)->get());
        });

        View::composer('front.mechanic.side',function($view){
            $view->with('areas',Area::where('status',1)->get());
        });

        //
        View::composer('admin.inc.header',function($view){
            $view->with('hires',Hiredlabour::limit(5)->where('seen',0)->get());
        });
    }
}
