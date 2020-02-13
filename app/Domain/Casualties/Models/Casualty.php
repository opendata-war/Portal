<?php

namespace App\Domain\Casualties\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Casualty
 *
 * @package App\Domain\Casualties\Models
 */
class Casualty extends Model
{
    protected $primaryKey = 'service_number';
    protected $guarded    = [];
}
