<?php

namespace App\Domain\Casualties\Providers;

use App\Domain\Casualties\Commands\Imports\VietnamCasualties;
use Illuminate\Support\ServiceProvider;

/**
 * Class CasualtyServiceProvider
 *
 * @package App\Domain\Casualties\Providers
 */
class CasualtyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([VietnamCasualties::class]);
        }
    }
}
