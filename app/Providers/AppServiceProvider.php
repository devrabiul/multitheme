<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $web_config[] = [
            'site_name'=>env('APP_NAME') != null ? env('APP_NAME') : 'Jarvis',
            'theme_name'=>env('WEB_THEME') == null ? 'Default' : Str::title(env('WEB_THEME')),
            'theme_color'=>env('WEB_THEME') == null ? '#1E65A7' : '#00743F',
            'current_route_name'=>Route::currentRouteName(),
        ];

        View::share(['web_config' => $web_config, 'VIEW_FILE_NAMES' => VIEW_FILE_NAMES]);
    }
}
