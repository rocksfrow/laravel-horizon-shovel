<?php

declare(strict_types=1);

use LaravelHorizonShovel\LaravelHorizonShovel\LaravelHorizonShovel;

it('resolves the singleton', function () {
    expect(app(LaravelHorizonShovel::class))->toBeInstanceOf(LaravelHorizonShovel::class);
});

it('returns the same instance from the container', function () {
    expect(app(LaravelHorizonShovel::class))->toBe(app(LaravelHorizonShovel::class));
});

it('merges the package config', function () {
    expect(config('laravel-horizon-shovel.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('laravel-horizon-shovel::messages.placeholder'))->toBe('LaravelHorizonShovel placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('laravel-horizon-shovel::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('laravel-horizon-shovel:placeholder')
        ->expectsOutputToContain('LaravelHorizonShovel placeholder command executed.')
        ->assertSuccessful();
});
