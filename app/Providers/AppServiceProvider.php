<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function($view)
        {
            $menu = new Menu;
            $menuList = $menu->tree();
            $view->with('menulist', $menuList);
        });
     
        if(config('app.debug')!=true) {
            \URL::forceScheme('https');
        }
    }
}
