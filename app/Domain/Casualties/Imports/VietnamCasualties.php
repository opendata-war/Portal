<?php

namespace App\Domain\Casualties\Imports;

use App\Domain\Casualties\Models\Casualty;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithProgressBar;

/**
 * Class VietnamCasualties
 *
 * @package App\Domain\Casualties\Imports
 */
class VietnamCasualties implements ToModel, WithCustomCsvSettings, WithChunkReading, WithBatchInserts, WithProgressBar
{
    use Importable;

    public function model(array $casualtyData): Casualty
    {
        return new Casualty([
            'service_number' => $casualtyData[0],
            'name' => $casualtyData[4],
        ]);
    }

    public function batchSize(): int
    {
        return 250;
    }

    public function chunkSize(): int
    {
        return 50;
    }

    public function getCsvSettings(): array
    {
        return ['delimiter' => '|'];
    }
}
