<?php

declare(strict_types=1);

namespace LaravelHorizonShovel\LaravelHorizonShovel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelHorizonShovel\LaravelHorizonShovel\LaravelHorizonShovel
 */
class LaravelHorizonShovel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelHorizonShovel\LaravelHorizonShovel\LaravelHorizonShovel::class;
    }
}
