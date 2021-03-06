<?php

namespace VladReshet\ArtisanUI;

use Illuminate\Support\ServiceProvider;

class ArtisanUIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/root/artisanui' => base_path('artisanui'),
            __DIR__.'/../config/config.php' => config_path('artisanui.php'),
        ], 'artisanui');
    }

    public function register()
    {
    }
}
