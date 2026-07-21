<?php

namespace App\Providers;

use App\Models\Setting;
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
        View::composer('pages.*', function ($view) {
            $settings = Setting::pluck('value', 'key');

            $heroTagline = app()->getLocale() === 'en'
                ? ($settings['hero_tagline_en'] ?? $settings['hero_tagline_id'] ?? '')
                : ($settings['hero_tagline_id'] ?? $settings['hero_tagline_en'] ?? '');

            $view->with([
                'settings' => $settings,
                'heroTagline' => $heroTagline,
            ]);
        });
    }
}
