<?php

namespace App\Models;

use App\Enums\CoachServiceEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_plate', //biển số xe
        'coach_maintenance_date',

    ];
    protected $casts = [
        'service' => CoachServiceEnum::class
    ];
    public function CoachManagements()
    {
        return $this->belongsto('CoachManagements::class');
    }
}
