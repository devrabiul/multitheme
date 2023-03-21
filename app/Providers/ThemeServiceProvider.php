<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $theme_name = ["default", "foster", "electro", "premium", "classic", "paradise"];

        // $ii = rand(0,5);
        // setEnvironmentValue('WEB_THEME', $theme_name[$ii]);


        // WEB_THEME
        $theme = env('WEB_THEME') == null ? 'default' : env('WEB_THEME');
        $path = base_path('resources/themes/' . $theme);
        define("VIEW_FILE_NAMES", include($path . '/files_name.php'));
        // view()->addLocation($path);
        View::addLocation($path);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
    }
}
