<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Throwable;

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
        Paginator::useBootstrap();

        try {
            view()->composer('*', function ($view) {
                $view->with('menus', Menu::orderBy('title')->get());
            });
        } catch (Throwable $t) {
            Log::debug('forbidden', [
                'error' => $t->getMessage() . ' in line ' . $t->getFile() . ' ' . $t->getLine()
            ]);
        }
    }
}
