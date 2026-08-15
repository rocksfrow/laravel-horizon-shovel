<?php

declare(strict_types=1);

namespace LaravelHorizonShovel\LaravelHorizonShovel\Tests;

use LaravelHorizonShovel\LaravelHorizonShovel\LaravelHorizonShovelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelHorizonShovelServiceProvider::class,
        ];
    }
}
