<?php

namespace App\Domain\Casualties\Commands\Imports;

use Illuminate\Console\Command;

/**
 * Class VietnamCasualties
 *
 * @package App\Domain\Casualties\Commands\Imports
 */
class VietnamCasualties extends Command
{
    /** @var string The name and signature of the console command. */
    protected $signature = 'import:vietnam-casualties';

    /** @var string The console command description. */
    protected $description = 'Command description';

    public function handle(): void
    {
        //
    }
}
