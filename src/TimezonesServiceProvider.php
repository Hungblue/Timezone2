<?php

namespace Laraveldaily\Timezones;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @throws BindingResolutionException
     */
    public function register(): void
    {
        include __DIR__ . '/routes.php';
        $this->app->make(TimezonesController::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'timezones');

        $this->publishes([
                             __DIR__ . '/views' => base_path('resources/views/laraveldaily/timezones'),
                         ]);
    }
}
