<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\StaffGenderEnum;
use App\Enums\StaffPositionEnum;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'phone_number',
        'birth_date',
        'position',
        'gender',


    ];
    protected $casts = [
        'gender' => StaffGenderEnum::class,
        'position' => StaffPositionEnum::class
    ];

    public function StaffManagement()
    {
        return $this->belongsTo('StaffManagement::class');
    }
}