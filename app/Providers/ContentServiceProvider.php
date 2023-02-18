<?php

namespace App\Providers;

use App\Models\Identitas;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.user-layout', function ($view) {
            $view->with('datas', Identitas::first());
        });

        view()->composer('layouts.admin-layout', function ($view) {
            $view->with('datas', Identitas::first());
        });
    }
}
