<?php

declare(strict_types=1);

namespace LaravelHorizonShovel\LaravelHorizonShovel\Console\Commands;

use Illuminate\Console\Command;

class LaravelHorizonShovelCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-horizon-shovel:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-horizon-shovel.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('LaravelHorizonShovel placeholder command executed.');

        return self::SUCCESS;
    }
}
