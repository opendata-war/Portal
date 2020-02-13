<?php

namespace App\Domain\Casualties\Imports;

use App\Domain\Casualties\Models\Casualty;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

/**
 * Class VietnamCasualties
 *
 * @package App\Domain\Casualties\Imports
 */
class VietnamCasualties implements ToModel, WithCustomCsvSettings, WithChunkReading, WithBatchInserts
{
    public function model(array $row): Casualty
    {
        return new Casualty([

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
        return ['delimeter' => '|'];
    }
}
