<?php

namespace App\Domain\Casualties\Commands\Imports;

use App\Domain\Casualties\Imports\VietnamCasualties as VietnamCasualtiesImport;
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
    protected $description = 'Command for start the import that inserts all the US vietnam casualties.';

    public function handle(): void
    {
        $dataPath = 'https://github.com/opendata-war/Vietnam-casualty-dataset/blob/master/DCAS.VN.EXT08.DAT';

        $this->output->title('['. now()->format('d/m/Y - H:i:s') .'] Started importing US casualties from the Vietnam conflict.');
        (new VietnamCasualtiesImport)->withOutput($this->output)->import($dataPath);
        $this->output->success('Import successfully ended.');
    }
}
