<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_plate', //biển số xe
        'working',
        'service'
    ];
    public function CoachManagements()
    {
        return $this->belongsto('CoachManagements::class');
    }
}
