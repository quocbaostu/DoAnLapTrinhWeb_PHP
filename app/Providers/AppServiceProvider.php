<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\category;
use App\Models\publisher;
use App\Models\book;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('header',function($view){
            $loai = category::all();
            $nhaxb= publisher::all();



            $view->with('loai_sub_menu', $loai);
            $view->with('nhaxb_sub_menu', $nhaxb);

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
