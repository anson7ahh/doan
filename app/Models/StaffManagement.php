<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffManagement extends Model
{
    use HasFactory;
    protected $fillable = [
        'work_timetable',
        'salary',
    ];
    public function Staff()
    {
        return $this->hasmany('Staff::class');
    }
}
