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
        $ii = rand(0,5);

        $theme_name = ["default", "foster", "electro", "premium", "classic", "paradise"];

        setEnvironmentValue('WEB_THEME', $theme_name[$ii]);


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
        $default_data = [];

        $theme_color = env('WEB_THEME') == null ? '#1E65A7' : '#00743F';
        $default_data[] = [
            'site_name'=>env('APP_NAME',),
            'theme_name'=>env('WEB_THEME',),
            'theme_color'=>$theme_color,
        ];

        View::share(['default_data' => $default_data, 'VIEW_FILE_NAMES' => VIEW_FILE_NAMES]);
    }
}
