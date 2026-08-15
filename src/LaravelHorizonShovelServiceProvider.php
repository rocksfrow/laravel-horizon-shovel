<?php

declare(strict_types=1);

namespace LaravelHorizonShovel\LaravelHorizonShovel;

use Illuminate\Support\ServiceProvider;
use LaravelHorizonShovel\LaravelHorizonShovel\Console\Commands\LaravelHorizonShovelCommand;

class LaravelHorizonShovelServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-horizon-shovel.php', 'laravel-horizon-shovel');

        $this->app->singleton(LaravelHorizonShovel::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/laravel-horizon-shovel.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-horizon-shovel');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-horizon-shovel');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-horizon-shovel.php' => config_path('laravel-horizon-shovel.php'),
        ], ['laravel-horizon-shovel', 'laravel-horizon-shovel-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-horizon-shovel'),
        ], ['laravel-horizon-shovel', 'laravel-horizon-shovel-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-horizon-shovel'),
        ], ['laravel-horizon-shovel', 'laravel-horizon-shovel-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-horizon-shovel'),
        ], ['laravel-horizon-shovel', 'laravel-horizon-shovel-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-horizon-shovel', 'laravel-horizon-shovel-migrations']);

        $this->commands([
            LaravelHorizonShovelCommand::class,
        ]);
    }
}
